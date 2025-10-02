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
    <p class="prose">Vi hjælper dig med at få en flot og nem hjemmeside, stærk branding og billeder/video der fanger.
      Hos FlowEffekt får du alt samlet ét sted – hjemmesider, identitet og content, som både ser godt ud og virker hurtigt på alle skærme.
    </p>
    <div class="hero-cta">
      <a class="btn" href="/services.php">Se vores services</a>
      <a class="btn ghost" href="/cases.php">Udforsk cases</a>
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
      <p>Vi bygger hjemmesider der er hurtige og nemme at bruge. De fungerer på mobil, tablet og computer – og er lette at vedligeholde.</p>
    </article>
    <article class="card">
      <h3>Identitet & Design</h3>
      <p>Vi hjælper dig med at finde et udtryk, der afspejler dig og din virksomhed. Logo, farver, skrifttyper og stil gør, at dit brand både føles rigtigt for dig og rammer den målgruppe, du vil nå</p>
    </article>
    <article class="card">
      <h3>Video & Content</h3>
      <p>Vi hjælper dig med at fortælle din historie med billeder og video. Dit indhold bliver professionelt, let at dele og tilpasset web og sociale medier.</p>
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
    <img src="/assets/img/cases/Vaerdifuldeliv - Macbook Pro.png"
        alt="Værdifulde Liv – webdesign og WordPress-hjemmeside"
        loading="lazy" decoding="async">
    <h3>Værdifulde Liv</h3>
    <p>Webdesign og WordPress-hjemmeside – enkel, hurtig og let at vedligeholde.</p>
    <a class="link" href="/cases.php">Se case</a>
  </article>
    <article class="card case-card kpi">
      <img src="/assets/img/cases/Mette - Macbook Pro.png"
          alt="Sauna Gus Kattinge – website-mockup med ny visuel identitet, foto og video"
          loading="lazy" decoding="async">
      <h3>Mette Truesen </h3>
      <p>Visuel identitet, hjemmeside og content & fotos</p>
      <a class="link" href="/cases.php">Se case</a>
    </article>

    <article class="card case-card kpi">
      <img src="/assets/img/cases/Byggefidus - Macbook Pro.png"
          alt="Byggefidusen – hjemmeside"
          loading="lazy" decoding="async">
      <h3>Byggefidusen</h3>
      <p>Opbygning og opsætning af hjemmeside.</p>
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
      <h3>Hurtige hjemmesider</h3>
      <ul class="check">
        <li>Loader hurtigt på mobil og computer</li>
        <li>SEO-venlige og teknisk optimerede</li>
        <li>Bedre oplevelse for dine besøgende</li>
      </ul>
    </article>
    <article class="card">
      <h3>Bygget til at vokse</h3>
      <ul class="check">
        <li>Fleksibel opbygning så du kan tilføje mere indhold senere</li>
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

<!-- Testimonials – midlertidigt skjult
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
-->

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
      <div class="faq-body">
        <p>Det afhænger af scope og integrationer. Typisk fra 35–120k DKK. Kontakt os for et fast tilbud.</p>
      </div>
    </details>
    <details class="card">
      <summary>Arbejder I med WordPress eller custom?</summary>
      <div class="faq-body">
        <p>Begge dele. Vi vælger platform ud fra jeres behov – altid med fokus på performance og vedligehold.</p>
      </div>
    </details>
    <details class="card">
      <summary>Hvor hurtigt kan I levere?</summary>
      <div class="faq-body">
        <p>En mindre corporate side: 3–5 uger. Større sites: 6–10 uger. Tidsplan aftales ved kickoff.</p>
      </div>
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
