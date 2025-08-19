(function() {
  const html = document.documentElement;
  const toggle = document.getElementById('theme-toggle');

  function setTheme(mode) {
    if (mode === 'light') {
      localStorage.setItem('theme-preference', 'light');
      html.setAttribute('data-theme', 'light');
      toggle.textContent = '☀️ Lyst';
    } else {
      localStorage.setItem('theme-preference', 'dark');
      html.setAttribute('data-theme', 'dark');
      toggle.textContent = '🌙 Mørkt';
    }
  }

  // Init: hent tidligere valg eller default dark
  let pref = localStorage.getItem('theme-preference') || 'dark';
  setTheme(pref);

  // Klik → toggle mellem dark og light
  if (toggle) {
    toggle.addEventListener('click', () => {
      let current = localStorage.getItem('theme-preference') || 'dark';
      if (current === 'light') setTheme('dark');
      else setTheme('light');
    });
  }
})();

// ===== Logo marquee: robust JS-loop, starter fra højre =====
(function(){
  const SPEED_MOBILE = 40; // px/sek
  const SPEED_DESKTOP = 60;

  const px = v => parseFloat(v) || 0;

  function measureSingleWidth(track){
    // mål bredden af første halvdel (første “kopi”) inkl. gap
    const items = Array.from(track.children);
    const half = (items.length / 2) | 0;
    const cs = getComputedStyle(track);
    const gap = px(cs.gap || cs.columnGap || 0);
    let w = 0;
    for (let i = 0; i < half; i++){
      w += items[i].getBoundingClientRect().width;
    }
    if (half > 1) w += gap * (half - 1);
    // fallback hvis 0
    return w || (track.scrollWidth / 2) || 1;
  }

  function setup(view){
    const track = view.querySelector('.marquee-track');
    if (!track) return;

    // Duplikér indhold én gang for sømløst loop
    if (!track.dataset.duped){
      track.innerHTML = track.innerHTML + track.innerHTML;
      track.dataset.duped = '1';
    }

    let vw = view.getBoundingClientRect().width;
    let singleW = measureSingleWidth(track);
    let pos = vw; // start helt ude fra højre
    let last = performance.now();
    let running = !window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Hover/focus pause
    const pause = () => running = false;
    const play  = () => running = true;
    view.addEventListener('mouseenter', pause);
    view.addEventListener('mouseleave', play);
    view.addEventListener('focusin', pause);
    view.addEventListener('focusout', play);

    // Opdater singleW når billeder loader (non-blocking)
    track.querySelectorAll('img').forEach(img => {
      img.addEventListener('load', () => {
        singleW = measureSingleWidth(track);
      }, { once: true });
    });

    // Reager på ændret reduced-motion
    const mq = window.matchMedia('(prefers-reduced-motion: reduce)');
    const onRM = () => {
      running = !mq.matches;
      if (!running) track.style.transform = ''; // nulstil hvis stoppet
      else pos = view.getBoundingClientRect().width; // genstart fra højre
    };
    mq.addEventListener ? mq.addEventListener('change', onRM) : mq.addListener(onRM);

    // Resize: mål igen, og hold start fra højre-følelse
    let t;
    window.addEventListener('resize', () => {
      clearTimeout(t);
      t = setTimeout(() => {
        vw = view.getBoundingClientRect().width;
        singleW = measureSingleWidth(track);
        pos = Math.min(pos, vw);
      }, 150);
    });

    function frame(now){
      const dt = (now - last) / 1000; last = now;
      if (running){
        const speed = (window.innerWidth >= 900) ? SPEED_DESKTOP : SPEED_MOBILE;
        pos -= speed * dt;
        if (pos <= -singleW){ pos += singleW; } // wrap efter én “kopi”
        track.style.transform = `translateX(${pos}px)`;
      }
      requestAnimationFrame(frame);
    }

    // Første frame
    track.style.transform = `translateX(${pos}px)`;
    requestAnimationFrame(frame);
  }

  function init(){
    document.querySelectorAll('[data-marquee]').forEach(setup);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init, { once: true });
  } else {
    init();
  }
})();





