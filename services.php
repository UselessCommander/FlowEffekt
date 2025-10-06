<?php
  $page = 'services';
  $title = 'Services';
  $description = 'Vi leverer Visual (logo, foto, video) og Web (hjemmesider) – hurtigt, moderne og målrettet resultater.';
  include __DIR__ . '/partials/header.php';
?>

<section class="page-intro">
  <div class="container">
    <h1>Services</h1>
    <p class="prose">To spor. Ét samlet udtryk. Vi designer og udvikler <strong>visuelle identiteter</strong> (logo, foto & video) og <strong>hjemmesider</strong> med fokus på hastighed, tilgængelighed og målbare effekter.</p>
  </div>
</section>

<!-- Tabs over panelerne -->
<section class="service-switch">
  <div class="container">
    <div class="pillbar" role="tablist" aria-label="Service-kategorier">
      <button id="tab-visual" class="pill-lg active"
              role="tab" aria-selected="true"
              aria-controls="panel-visual" data-target="#panel-visual">
        Visual
      </button>
      <button id="tab-web" class="pill-lg"
              role="tab" aria-selected="false"
              aria-controls="panel-web" data-target="#panel-web">
        Web
      </button>
    </div>
  </div>
</section>

<!-- Paneler -->
<section class="panels">
  <div class="container">

    <!-- ========== Panel: VISUAL ========== -->
    <div class="panel" id="panel-visual" role="tabpanel" aria-labelledby="tab-visual">
      <div class="lead-split">
        <div>
          <h2>VisualFlow</h2>
          <p class="prose">
            Branding gennem <strong>logo, fotografi og video</strong>, der skaber opmærksomhed
            og styrker dit udtryk på tværs af web og sociale medier.
          </p>
        </div>
        <ul class="stack-badges-list">
          <li>Logo & identitet</li><li>Foto</li><li>Video</li><li>SoMe</li>
        </ul>
      </div>

      <!-- Visual: Pakker -->
      <div class="grid-3 cards pricing">
        <article class="card price-card">
          <h3>Foto</h3>
          <p class="price">Fra 4.500,-</p>
          <ul class="check">
            <li>30 redigerede billeder i høj opløsning</li>
            <li>3 timer + 1 lokation</li>
            <li>Farvegrading & retouch</li>
            <li>Levering på 7 dage</li>
          </ul>
          <a class="btn ghost" href="/kontakt.php">Kontakt os</a>
        </article>

        <article class="card price-card featured">
          <div class="ribbon">Mest valgt</div>
          <h3>Video</h3>
          <p class="price">Fra 7.500,-</p>
          <ul class="check">
            <li>1 video (op til 60 sek.)</li>
            <li>5 timer + 1 lokation</li>
            <li>4K-optagelse, farve & lyd</li>
            <li>Levering på 14 dage</li>
          </ul>
          <a class="btn" href="/kontakt.php">Kontakt os</a>
        </article>

        <article class="card price-card">
          <h3>Video Pro</h3>
          <p class="price">Fra 12.500,-</p>
          <ul class="check">
            <li>2 videoer (op til 60 sek.) i 2 formater</li>
            <li>5 timer, 1–2 lokationer</li>
            <li>Drone (hvis lovligt) + pro lyd</li>
            <li>Levering inden 14 dage</li>
          </ul>
          <a class="btn ghost" href="/kontakt.php">Kontakt os</a>
        </article>
      </div>

      <!-- Visual: Leverancer + add-ons -->
      <div class="grid-3 cards">
        <article class="card">
          <h3>Du får altid</h3>
          <ul class="check">
            <li>Rettigheder til brug</li>
            <li>Filformater til web/SoMe</li>
            <li>Let guideline til brug</li>
          </ul>
        </article>
        <article class="card">
          <h3>Optioner</h3>
          <ul class="check">
            <li>Logo & minidesignsystem</li>
            <li>Stills fra video</li>
            <li>Teksting & undertekster</li>
          </ul>
        </article>
        <article class="card">
          <h3>Eksempler</h3>
          <p class="muted">Se udvalgte cases, hvor visual og web spiller sammen.</p>
          <a class="link" href="/cases.php">Udforsk cases</a>
        </article>
      </div>
    </div>

    <!-- ========== Panel: WEB ========== -->
    <div class="panel" id="panel-web" role="tabpanel" aria-labelledby="tab-web" hidden>
      <div class="lead-split">
        <div>
          <h2>WebFlow</h2>
          <p class="prose">
            Hurtige, tilgængelige og skalerbare <strong>hjemmesider</strong> – semantisk HTML,
            modulær CSS og minimal JS. KPI: Core Web Vitals i grønt.
          </p>
        </div>
        <ul class="stack-badges-list">
          <li>Mobile-first</li><li>WCAG 2.2</li><li>SEO</li><li>PHP</li>
        </ul>
      </div>

      <!-- Web: Pakker -->
      <div class="grid-3 cards pricing">
        <article class="card price-card">
          <h3>Starter</h3>
          <p class="price">Fra 25.000,-</p>
          <ul class="check">
            <li>1 landingsside</li>
            <li>Let designsystem</li>
            <li>Implementering & opsætning</li>
          </ul>
          <a class="btn ghost" href="/kontakt.php">Kontakt os</a>
        </article>

        <article class="card price-card featured">
          <div class="ribbon">Mest valgt</div>
          <h3>Growth</h3>
          <p class="price">Fra 55.000,-</p>
          <ul class="check">
            <li>5–8 sider + blog</li>
            <li>Komplet designsystem</li>
            <li>Performance-optimering</li>
          </ul>
          <a class="btn" href="/kontakt.php">Kontakt os</a>
        </article>

        <article class="card price-card">
          <h3>Custom</h3>
          <p class="price">Fast pris</p>
          <ul class="check">
            <li>Specialfunktioner & integrationer</li>
            <li>Designsprint & UX-research</li>
            <li>SLA & support</li>
          </ul>
          <a class="btn ghost" href="/kontakt.php">Kontakt os</a>
        </article>
      </div>


      <div class="grid-3 cards">
  <article class="card">
    <h3>Du får altid</h3>
    <ul class="check">
      <li>Ren HTML og modulær CSS</li>
      <li>Kun nødvendig JavaScript og hurtig indlæsning</li>
      <li>Delings- og SEO-tags sat korrekt op</li>
    </ul>
  </article>

  <article class="card">
    <h3>Teknik & standarder</h3>
    <ul class="check">
      <li>Tilgængelighed (WCAG 2.2) og GDPR</li>
      <li>Hurtig og stabil ydelse (Core Web Vitals)</li>
      <li>WordPress, PHP eller skræddersyet – efter behov</li>
    </ul>
  </article>

  <article class="card">
    <h3>Levering & vedligehold</h3>
    <ul class="check">
      <li>Klar overlevering og korte guides</li>
      <li>Backup og grundlæggende sikkerhed</li>
      <li>Mulighed for løbende hjælp efter behov</li>
    </ul>
  </article>
</div>
    </div>

  </div>
</section>


<section class="stripe">
  <div class="container">
    <h2>Klar til at løfte dit brand?</h2>
    <a class="btn" href="/kontakt.php">Kontakt os</a>
  </div>
</section>

<script>
(() => {
  const tabs   = document.querySelectorAll('.pillbar [role="tab"]');
  const panels = document.querySelectorAll('.panel[role="tabpanel"]');

  function show(id) {
    tabs.forEach(t => {
      const isActive = t.id === ('tab-' + id);
      t.classList.toggle('active', isActive);
      t.setAttribute('aria-selected', isActive ? 'true' : 'false');
    });
    panels.forEach(p => { p.hidden = p.id !== ('panel-' + id); });
  }

  tabs.forEach(tab => tab.addEventListener('click', () => {
    const target = tab.getAttribute('data-target') || ('#' + tab.getAttribute('aria-controls'));
    const id = target.replace('#panel-', '').replace('panel-', '');
    show(id);
    history.replaceState(null, '', '#' + id);
  }));

  // Init fra hash (#web / #visual) eller default visual
  const hash = (location.hash || '').replace('#','');
  show(hash === 'web' ? 'web' : 'visual');
})();
</script>


<?php include __DIR__ . '/partials/footer.php'; ?>
