<?php
  $page = 'about';
  $title = 'Om os';
  $description = 'FlowEffekt er et lille, fokuseret studio. Vi kombinerer design, content og udvikling for at skabe flow – og effekt.';
  include __DIR__ . '/partials/header.php';
?>

<!-- Intro -->
<section class="page-intro">
  <div class="container">
    <h1>Om FlowEffekt</h1>
    <p class="prose">Vi er et digitalt studio der hjælper virksomheder med at få <strong>flow</strong> i processerne og <strong>effekt</strong> i resultaterne – gennem web, video og visuel identitet.</p>
  </div>
</section>

<!-- Highlight CTA -->
<section class="highlight">
  <div class="container">
    <div class="card" style="display:flex; align-items:center; justify-content:space-between; gap:1rem; flex-wrap:wrap;">
      <p style="margin:0; max-width:62ch">Vi skaber flow i processen og effekt i resultaterne — med klare rammer, skarpe leverancer og fokus på performance.</p>
      <div style="display:flex; gap:.6rem; flex-wrap:wrap;">
        <a class="btn" href="/services.php">Se vores services</a>
        <a class="btn ghost" href="/kontakt.php">Kontakt</a>
      </div>
    </div>
  </div>
</section>

<!-- Flow & Effekt -->
<section class="about">
  <div class="container">
    <div class="about-grid">
      <article>
        <h2>Flow</h2>
        <p class="prose">Flow er følelsen af, at alt glider. For jer betyder det klare rammer, en enkel proces og løsninger der er lette at vedligeholde. Vi arbejder mobile-first, med semantisk HTML og modulær CSS for at reducere kompleksitet.</p>
      </article>
      <article>
        <h2>Effekt</h2>
        <p class="prose">Effekt er det målbare udbytte: hurtigere websites, bedre synlighed og flere henvendelser. Vi prioriterer performance, tilgængelighed og klare KPI’er fremfor pynt og plugins.</p>
      </article>
    </div>
  </div>
</section>

<!-- Mission & Vision -->
<section>
  <div class="container cards">
    <h2>Mission &amp; vision</h2>
    <div class="grid-3">
      <article class="card">
        <h3><svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem"><path fill="currentColor" d="M12 2l3 6 6 .9-4.5 4.3 1.1 6.5L12 16l-5.6 3.7 1.1-6.5L3 8.9 9 8z"/></svg>Mission</h3>
        <p class="muted">At bygge skarpe, hurtige og tilgængelige løsninger der skaber reel værdi for både brugere og forretning.</p>
      </article>
      <article class="card">
        <h3><svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem"><path fill="currentColor" d="M12 4a9 9 0 019 9H3a9 9 0 019-9zm0 3a6 6 0 00-5.3 3h10.6A6 6 0 0012 7z"/></svg>Vision</h3>
        <p class="muted">At være det lille bureau, der føles som en udvidelse af jeres team: enkel proces, gode beslutninger, stærke resultater.</p>
      </article>
      <article class="card">
        <h3><svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem"><path fill="currentColor" d="M3 12h6l2-3 4 7 2-3h4v2h-3l-3 5-4-7-1 1H3z"/></svg>Hvordan</h3>
        <p class="muted">Strategi &rarr; designsystem &rarr; udvikling &rarr; måling. Vi skærer støj fra og fokuserer på det, der gør en forskel.</p>
      </article>
    </div>
  </div>
</section>

<div class="section-divider" role="separator" aria-hidden="true"></div>
<!-- Værdier -->
<section>
  <div class="container cards">
    <h2>Værdier</h2>
    <div class="grid-3">
      <article class="card">
        <h3><svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem"><path fill="currentColor" d="M12 2a7 7 0 016.2 10.3L17 16v2h-2v3h-6v-3H7v-2l-1.2-3.7A7 7 0 0112 2z"/></svg>Innovation</h3>
        <p class="muted">Vi vælger moderne, robuste løsninger – ikke modefænomener.</p>
      </article>
      <article class="card">
        <h3><svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem"><path fill="currentColor" d="M12 2l9 4-9 4-9-4 9-4zm-7 8l7 3 7-3v8l-7 3-7-3v-8z"/></svg>Troværdighed</h3>
        <p class="muted">Klar kommunikation, realistiske tidsplaner og gennemsigtighed.</p>
      </article>
      <article class="card">
        <h3><svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem"><path fill="currentColor" d="M3 13h8V3H3v10zm10 8h8V3h-8v18zM3 21h8v-6H3v6z"/></svg>Effektivitet</h3>
        <p class="muted">Lean stack, modulære komponenter og dokumenterede arbejdsgange.</p>
      </article>
      <article class="card">
        <h3><svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem"><path fill="currentColor" d="M12 7a5 5 0 015 5h5a10 10 0 10-10 10v-5a5 5 0 110-10z"/></svg>Målrettet design</h3>
        <p class="muted">Design med formål: læsbarhed, tilgængelighed og konvertering.</p>
      </article>
    </div>
  </div>
</section>

<!-- Hvorfor vælge os -->
<section>
  <div class="container cards">
    <h2>Hvorfor vælge os?</h2>
    <div class="grid-3">
      <article class="card">
        <h3>Strategisk webdesign</h3>
        <ul class="check">
          <li>Designsystem der skalerer</li>
          <li>Konsistent UI på tværs af sider</li>
          <li>Komponenter med genbrug</li>
        </ul>
      </article>
      <article class="card">
        <h3>Content med kvalitet</h3>
        <ul class="check">
          <li>Tekst, foto og video</li>
          <li>Storytelling med klare budskaber</li>
          <li>Content pipelines til SoMe</li>
        </ul>
      </article>
      <article class="card">
        <h3>Tæt samarbejde</h3>
        <ul class="check">
          <li>Partner-mentalitet</li>
          <li>Klar kommunikation & scope</li>
          <li>Fast kontaktperson</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<div class="section-divider" role="separator" aria-hidden="true"></div>
<!-- Team -->
<section>
  <div class="container">
    <h2>Mød teamet</h2>
    <div class="team-grid">
      <article class="team-card">
        <img class="avatar" src="/assets/img/team/Lucas-schuldt.jpg" alt="Lucas" loading="lazy" decoding="async">
        <h3 class="name">Lucas</h3>
        <p class="role">Webudvikler &amp; video</p>
        <p class="bio">Bygger hurtige websites og producerer videoindhold med fokus på fortælling og ydelse.</p>
        <a class="btn tiny contact" href="mailto:lucas@floweffekt.dk">lucas@floweffekt.dk</a>
      </article>
      <article class="team-card">
        <img class="avatar" src="/assets/img/team/Hasti-amang.png" alt="Hasti" loading="lazy" decoding="async">
        <h3 class="name">Hasti</h3>
        <p class="role">Designer &amp; brand</p>
        <p class="bio">Udvikler identiteter, UI-systemer og visuelle kits til web og sociale medier.</p>
        <a class="btn tiny contact" href="mailto:hasti@floweffekt.dk">hasti@floweffekt.dk</a>
      </article>
      <article class="team-card">
        <img class="avatar" src="/assets/img/team/Gabriel-lausten.png" alt="Gabriel" loading="lazy" decoding="async">
        <h3 class="name">Gabriel</h3>
        <p class="role">Front‑end &amp; strategi</p>
        <p class="bio">Semantisk HTML, modulær CSS og performance som KPI – fra idé til implementering.</p>
        <a class="btn tiny contact" href="mailto:gabriel@floweffekt.dk">gabriel@floweffekt.dk</a>
      </article>
    </div>
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

<!-- CTA -->
<section class="stripe cta-stripe">
  <div class="container">
    <h2>Klar til at arbejde med os?</h2>
    <a class="btn" href="/kontakt.php">Kontakt os</a>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
