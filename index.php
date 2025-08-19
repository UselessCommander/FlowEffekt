<?php
  $page = 'home';
  $title = 'Digitalt bureau for web, video & branding';
  $description = 'Sleek, minimalistisk og moderne løsninger. Vi bygger websites, identiteter og content der skaber effekt.';
  include __DIR__ . '/partials/header.php';
?>

<!-- Hero -->
<section class="hero">
  <div class="container hero-inner">
    <h1>Digitale løsninger der skaber <span class="accent">effekt</span></h1>
    <p class="prose">Web, identitet og video – samlet til ét strømlinet brand. Mobile-first, performance og skalerbarhed som standard.</p>
    <div class="hero-cta">
      <a class="btn" href="/services.php">Se vores services</a>
      <a class="btn ghost" href="/cases.php">Udforsk cases</a>
    </div>
  </div>
</section>

<!-- Logo strip (social proof) -->
<section class="logos marquee" aria-label="Kunder vi har arbejdet med">
  <div class="container">
    <div class="marquee-viewport" data-marquee>
      <ul class="marquee-track">
        <li><img src="/assets/img/logos/brand1.svg" alt="Brand 1" loading="lazy" decoding="async"></li>
        <li><img src="/assets/img/logos/brand2.svg" alt="Brand 2" loading="lazy" decoding="async"></li>
        <li><img src="/assets/img/logos/brand3.svg" alt="Brand 3" loading="lazy" decoding="async"></li>
        <li><img src="/assets/img/logos/brand4.svg" alt="Brand 4" loading="lazy" decoding="async"></li>
        <li><img src="/assets/img/logos/brand5.svg" alt="Brand 5" loading="lazy" decoding="async"></li>
        <li><img src="/assets/img/logos/brand6.svg" alt="Brand 6" loading="lazy" decoding="async"></li>
      </ul>
    </div>
  </div>
</section>



<!-- Nøglekompetencer -->
<section class="feature-grid" aria-labelledby="features-title">
  <div class="container">
    <h2 id="features-title" class="visually-hidden">Kernekompetencer</h2>
  </div>
  <div class="container grid-3">
    <article class="card">
      <h3>Web & Performance</h3>
      <p>Semantisk HTML, modulær CSS og minimal JS. Vi bygger hurtigt, tilgængeligt og responsivt.</p>
    </article>
    <article class="card">
      <h3>Identitet & Design</h3>
      <p>Visuel identitet, tone-of-voice og designsystemer, der kan vokse med din forretning.</p>
    </article>
    <article class="card">
      <h3>Video & Content</h3>
      <p>Stemningsfulde fortællinger og klare budskaber – optimalt klippet til web og SoMe.</p>
    </article>
  </div>
</section>

<div class="section-divider" role="separator" aria-hidden="true"></div>

<!-- Udvalgte cases med KPI -->
<section class="case-list" aria-labelledby="cases-title">
  <div class="container">
    <h2 id="cases-title">Udvalgte cases</h2>
  </div>
  <div class="container list grid-3">
    <article class="card case-card kpi">
      <img src="/assets/img/cases/vaerdifulde-liv.jpg" alt="Værdifulde Liv – website og identitet" loading="lazy" decoding="async">
      <h3>Værdifulde Liv</h3>
      <p>Identitet & web. Core Web Vitals: grøn på alle metrics.</p>
      <a class="link" href="/cases.php">Se case</a>
    </article>

    <article class="card case-card kpi">
      <img src="/assets/img/cases/sauna-gus.jpg" alt="Sauna Gus Kattinge – video og content" loading="lazy" decoding="async">
      <h3>Sauna Gus Kattinge</h3>
      <p>Sanselig stemningsvideo og brandfortælling med natur i fokus.</p>
      <a class="link" href="/cases.php">Se case</a>
    </article>

    <article class="card case-card kpi">
      <img src="/assets/img/cases/floweffekt-demo.jpg" alt="Performance demo – teknisk optimering" loading="lazy" decoding="async">
      <h3>Performance demo</h3>
      <p>Teknisk optimering, caching og billedpipeline – Mobile Vitals i top.</p>
      <a class="link" href="/cases.php">Se case</a>
    </article>
  </div>
</section>

<!-- Hvorfor os -->
<section class="cards" aria-labelledby="why-title">
  <div class="container">
    <h2 id="why-title">Hvorfor vælge FlowEffekt?</h2>
  </div>
  <div class="container grid-3">
    <article class="card">
      <h3>Performance først</h3>
      <ul class="check">
        <li>Core Web Vitals grønt</li>
        <li>Hurtig time-to-first-byte</li>
        <li>Lazy load & billedpipeline</li>
      </ul>
    </article>
    <article class="card">
      <h3>Modulær & skalerbar</h3>
      <ul class="check">
        <li>Semantisk HTML, modulær CSS</li>
        <li>Minimal JS</li>
        <li>Designsystem der vokser</li>
      </ul>
    </article>
    <article class="card">
      <h3>Tryg proces</h3>
      <ul class="check">
        <li>Klar kommunikation</li>
        <li>Fast scope & tidsplan</li>
        <li>Support efter launch</li>
      </ul>
    </article>
  </div>
</section>

<!-- Proces -->
<section class="about" aria-labelledby="process-title">
  <div class="container">
    <h2 id="process-title">Sådan arbejder vi</h2>
    <div class="about-grid">
      <div class="card">
        <h3>1) Kickoff</h3>
        <p>Behov, målgruppe og succeskriterier. Vi prioriterer scope og sætter tempoet.</p>
      </div>
      <div class="card">
        <h3>2) Designsystem</h3>
        <p>UI-komponenter, farver og typografi – mobile-first og tilgængeligt.</p>
      </div>
      <div class="card">
        <h3>3) Build</h3>
        <p>HTML, CSS, JS & PHP med fokus på performance, SEO og vedligehold.</p>
      </div>
      <div class="card">
        <h3>4) Launch & optimering</h3>
        <p>Overvågning, A/B-tests og løbende forbedringer efter behov.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="testimonials" aria-labelledby="testimonials-title">
  <div class="container">
    <h2 id="testimonials-title">Det siger kunderne</h2>
  </div>
  <div class="container grid-3">
    <figure class="quote">
      <blockquote>“Det nye site er hurtigt, rent og har løftet vores leads markant.”</blockquote>
      <figcaption><img src="/assets/img/people/a.jpg" alt="" loading="lazy" decoding="async"> Anna M., Marketingchef</figcaption>
    </figure>
    <figure class="quote">
      <blockquote>“Samarbejdet var super struktureret – vi følte os trygge hele vejen.”</blockquote>
      <figcaption><img src="/assets/img/people/b.jpg" alt="" loading="lazy" decoding="async"> Mikkel K., COO</figcaption>
    </figure>
    <figure class="quote">
      <blockquote>“Core Web Vitals gik i grønt, og vores organiske trafik steg uge for uge.”</blockquote>
      <figcaption><img src="/assets/img/people/c.jpg" alt="" loading="lazy" decoding="async"> Nanna L., E-commerce lead</figcaption>
    </figure>
  </div>
</section>

<!-- CTA-stribe -->
<section class="stripe cta-stripe" aria-label="Kontakt CTA">
  <div class="container">
    <h2>Klar til at løfte dit brand?</h2>
    <a class="btn" href="/kontakt.php">Kontakt os</a>
  </div>
</section>

<!-- FAQ -->
<section class="faq" aria-labelledby="faq-title">
  <div class="container">
    <h2 id="faq-title">FAQ</h2>
    <details class="card">
      <summary>Hvad koster et website?</summary>
      <p>Det afhænger af scope og integrationer. Typisk fra 35–120k DKK. Kontakt os for et fast tilbud.</p>
    </details>
    <details class="card">
      <summary>Arbejder I med WordPress eller custom?</summary>
      <p>Begge dele. Vi vælger platform ud fra jeres behov – altid med fokus på performance og vedligehold.</p>
    </details>
    <details class="card">
      <summary>Hvor hurtigt kan I levere?</summary>
      <p>En mindre corporate side: 3–5 uger. Større sites: 6–10 uger. Tidsplan aftales ved kickoff.</p>
    </details>
  </div>
</section>

<!-- FAQ Schema (SEO) -->
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"FAQPage",
  "mainEntity":[
    {"@type":"Question","name":"Hvad koster et website?","acceptedAnswer":{"@type":"Answer","text":"Det afhænger af scope og integrationer. Typisk fra 35–120k DKK. Kontakt os for et fast tilbud."}},
    {"@type":"Question","name":"Arbejder I med WordPress eller custom?","acceptedAnswer":{"@type":"Answer","text":"Begge dele. Vi vælger platform ud fra jeres behov – altid med fokus på performance og vedligehold."}},
    {"@type":"Question","name":"Hvor hurtigt kan I levere?","acceptedAnswer":{"@type":"Answer","text":"En mindre corporate side: 3–5 uger. Større sites: 6–10 uger. Tidsplan aftales ved kickoff."}}
  ]
}
</script>

<?php include __DIR__ . '/partials/footer.php'; ?>
