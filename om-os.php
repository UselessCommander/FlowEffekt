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


<!-- Mission & Vision -->
<section class="about">
  <div class="container">
    <div class="about-grid">
      <article>
        <h2>Flow</h2>
        <p class="prose">Flow er når tingene kører nemt. For dig betyder det en klar plan, simple processer og løsninger, der er lette at bruge og vedligeholde.</p>
      </article>
      <article>
        <h2>Effekt</h2>
        <p class="prose">Effekt er det, du får ud af samarbejdet: hurtigere hjemmesider, bedre synlighed og flere henvendelser. Vi prioriterer resultater og brugervenlighed frem for pynt.</p>
      </article>
    </div>
  </div>
</section>

<div class="section-divider" role="separator" aria-hidden="true"></div>
<section class="about" aria-labelledby="values-title">
  <div class="container">
    <h2 id="values-title">Værdier</h2>

    <div class="about-grid">
      <article class="card">
        <h3>
          <svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem">
            <path fill="currentColor" d="M12 2a7 7 0 016.2 10.3L17 16v2h-2v3h-6v-3H7v-2l-1.2-3.7A7 7 0 0112 2z"/>
          </svg>
          Innovation
        </h3>
        <p class="muted">Vi vælger løsninger, der holder – ikke hurtige trends.</p>
      </article>

      <article class="card">
        <h3>
          <svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem">
            <path fill="currentColor" d="M12 2l9 4-9 4-9-4 9-4zm-7 8l7 3 7-3v8l-7 3-7-3v-8z"/>
          </svg>
          Troværdighed
        </h3>
        <p class="muted">Vi lover kun det, vi kan holde og gør det, vi lover.</p>
      </article>

      <article class="card">
        <h3>
          <svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem">
            <path fill="currentColor" d="M3 13h8V3H3v10zm10 8h8V3h-8v18zM3 21h8v-6H3v6z"/>
          </svg>
          Effektivitet
        </h3>
        <p class="muted">Vi gør tingene enkelt, hurtigt og rigtigt.</p>
      </article>

      <article class="card">
        <h3>
          <svg viewBox="0 0 24 24" aria-hidden="true" style="width:18px;height:18px;vertical-align:-3px;margin-right:.4rem">
            <path fill="currentColor" d="M12 7a5 5 0 015 5h5a10 10 0 10-10 10v-5a5 5 0 110-10z"/>
          </svg>
          Målrettet design
        </h3>
        <p class="muted">Design, der gør det nemt at læse, forstå og handle.</p>
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
          <li>Design der kan vokse</li>
          <li>Ensartet design på alle sider</li>
          <li>Komponenter med genbrug</li>
        </ul>
      </article>
      <article class="card">
        <h3>Content med kvalitet</h3>
        <ul class="check">
          <li>Tekst, foto og video</li>
          <li>Storytelling med klare budskaber</li>
          <li>Indhold klar til sociale medier</li>
        </ul>
      </article>
      <article class="card">
        <h3>Tæt samarbejde</h3>
        <ul class="check">
          <li>Partner-tilgang i hvert projekt</li>
          <li>Klare aftaler og gennemsigtighed</li>
          <li>Løbende dialog med teamet</li>
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
        <p class="role">Art Director &amp; video</p>
        <p class="bio">Sætter den kreative retning og sikrer, at hvert projekt får et visuelt udtryk der skiller sig ud. Arbejder med idéudvikling, koncept og design, så form og fortælling hænger sammen.</p>
        <a class="btn tiny contact" href="mailto:lucas@floweffekt.dk">lucas@floweffekt.dk</a>
      </article>
      <article class="team-card">
        <img class="avatar" src="/assets/img/team/Hasti-amang.png" alt="Hasti" loading="lazy" decoding="async">
        <h3 class="name">Hasti</h3>
        <p class="role">Digital Branding Designer &amp; brand</p>
        <p class="bio">Skaber identiteter og digitale designsystemer, der giver brands en stærk og genkendelig stemme. Arbejder med visuel identitet, UI og content, så udtryk og brand føles helstøbt.</p>
        <a class="btn tiny contact" href="mailto:hasti@floweffekt.dk">hasti@floweffekt.dk</a>
      </article>
      <article class="team-card">
        <img class="avatar" src="/assets/img/team/Gabriel-lausten.png" alt="Gabriel" loading="lazy" decoding="async">
        <h3 class="name">Gabriel</h3>
        <p class="role">Lead Developer &amp; strategi</p>
        <p class="bio">Bygger hurtige og stabile websites med fokus på performance og struktur. Sørger for at teknikken spiller, og at løsningerne er fleksible, tilgængelige og lette at videreudvikle.</p>
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
        <p>Vi afklarer behov, målgruppe og mål og lægger en realistisk plan for projektet.</p>
      </div>
      <div class="card">
        <h3>2) Design</h3>
        <p>Vi bygger et visuelt udtryk, der passer til brandet med fokus på brugervenlighed og stil.</p>
      </div>
      <div class="card">
        <h3>3) Udvikling</h3>
        <p>Vi udvikler hjemmesiden i det system, der passer bedst fx WordPress, Shopify eller custom.</p>
      </div>
      <div class="card">
        <h3>4) Lancering</h3>
        <p>Vi tester alt, hjælper med opsætning og sikrer, at siden kører, som den skal.</p>
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
