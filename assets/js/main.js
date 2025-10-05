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


// Mobile nav (burger) — slide-in drawer with overlay & a11y
(function(){
  const burger = document.querySelector('.burger');
  const nav = document.getElementById('site-nav');
  if(!burger || !nav) return;

  // Ensure proper ARIA
  burger.setAttribute('aria-controls','site-nav');
  burger.setAttribute('aria-expanded','false');

  // Create (or reuse) backdrop overlay
  let overlay = document.querySelector('.nav-backdrop');
  if(!overlay){
    overlay = document.createElement('button');
    overlay.type = 'button';
    overlay.className = 'nav-backdrop';
    overlay.setAttribute('aria-label','Luk menu');
    document.body.appendChild(overlay);
  }

  function openNav(){
    nav.classList.add('open');
    document.body.classList.add('menu-open');
    burger.setAttribute('aria-expanded','true');
    overlay.classList.add('show');
    const first = nav.querySelector('a,button');
    if(first) first.focus({preventScroll:true});
  }
  function closeNav(){
    nav.classList.remove('open');
    document.body.classList.remove('menu-open');
    burger.setAttribute('aria-expanded','false');
    overlay.classList.remove('show');
    burger.focus({preventScroll:true});
  }
  function toggleNav(){
    if(nav.classList.contains('open')) closeNav();
    else openNav();
  }

  burger.addEventListener('click', toggleNav);
  overlay.addEventListener('click', closeNav);

  // Close when clicking any link inside nav
  nav.addEventListener('click', (e)=>{
    const link = e.target.closest('a');
    if(link) closeNav();
  });

  // Close on Escape
  document.addEventListener('keydown', (e)=>{
    if(e.key === 'Escape' && nav.classList.contains('open')) closeNav();
  });
})();


// Global custom cursor (dot + ring), robust tracking
(function () {
  const fine = window.matchMedia('(pointer: fine)').matches;
  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!fine || reduced) return;

  document.documentElement.classList.add('custom-cursor');

  const dot = document.createElement('div');
  dot.className = 'fe-cursor';
  const ring = document.createElement('div');
  ring.className = 'fe-cursor-ring';
  document.body.append(dot, ring);

  let x = innerWidth / 2, y = innerHeight / 2;  // målpunkt
  let rx = x, ry = y;                           // ringens smoothede position

  // præcis position (left/top) uden offset-bugs
  function onMove(e) {
    x = e.clientX; y = e.clientY;
    dot.style.left = x + 'px'; dot.style.top = y + 'px';
  }
  window.addEventListener('pointermove', onMove, { passive: true });

  // highlight når vi er over interaktive elementer
  const hoverSel = ['a','button','.btn','[role="button"]','summary','label'].join(',');
  window.addEventListener('pointermove', (e) => {
    const el = e.target.closest(hoverSel);
    document.documentElement.classList.toggle('cursor-hover', !!el);
  }, { passive: true });

  // === Smooth follow (FPS-uafhængig) ===
  (function () {
    let last = performance.now();
    function raf(now) {
      const dt = Math.max(0, Math.min(32, now - last)); // clamp spikes
      last = now;

      const isHover = document.documentElement.classList.contains('cursor-hover');
      const base = 0.10;  // rolig uden hover
      const fast = 0.16;  // lidt hurtigere ved hover
      const rate = isHover ? fast : base;

      // konverter til FPS-uafhængig blanding
      const t = 1 - Math.exp(-rate * (dt / 16.67));

      // valgfri max step per frame (glatter tracking)
      const MAX_STEP = isHover ? 60 : 30; // px
      const dx = x - rx, dy = y - ry;
      const dist = Math.hypot(dx, dy);
      const step = Math.min(dist * t, MAX_STEP);
      const nx = dist ? dx / dist : 0;
      const ny = dist ? dy / dist : 0;

      rx += nx * step; ry += ny * step;
      ring.style.left = rx + 'px'; ring.style.top  = ry + 'px';

      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);
  })();

  // klik-feedback (pulse via .cursor-click)
  window.addEventListener('pointerdown', () => {
    document.documentElement.classList.add('cursor-click');
  });
  window.addEventListener('pointerup', () => {
    document.documentElement.classList.remove('cursor-click');
  });

  // vis/skip når musen forlader vinduet
  document.addEventListener('mouseleave', () => {
    dot.style.opacity = '0'; ring.style.opacity = '0';
  });
  document.addEventListener('mouseenter', () => {
    dot.style.opacity = '1'; ring.style.opacity = '1';
  });

  // Undgå custom cursor i contenteditable (behøver I-beam)
  document.addEventListener('pointerover', (e) => {
    if (e.target.closest('[contenteditable="true"]')) {
      document.documentElement.classList.remove('custom-cursor');
      dot.style.display = 'none'; ring.style.display = 'none';
    }
  });
  document.addEventListener('pointerout', (e) => {
    if (e.target.closest('[contenteditable="true"]')) {
      document.documentElement.classList.add('custom-cursor');
      dot.style.display = ''; ring.style.display = '';
    }
  });
})();