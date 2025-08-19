<?php
  $page = 'about';
  $title = 'Om os';
  $description = 'Vi kombinerer design, strategi og udvikling for at skabe flow – og effekt.';
  include __DIR__ . '/partials/header.php';
?>
<section class="page-intro">
  <div class="container">
    <h1>Om FlowEffekt</h1>
    <p>Vi er et lille team med stor kærlighed til enkle løsninger, rene linjer og høj kvalitet.</p>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="about-grid">
      <div>
        <h3>Vores filosofi</h3>
        <p>Mobile-first, semantisk HTML, modulær CSS og så lidt JS som muligt. Vi prioriterer performance, tilgængelighed og vedligeholdelse.</p>
      </div>
      <div>
        <h3>Sådan arbejder vi</h3>
        <ul class="check">
          <li>Research & målgruppe</li>
          <li>Designsystem & prototyper</li>
          <li>Udvikling & test</li>
          <li>Launch & optimering</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="stripe cta-stripe">
  <div class="container">
    <h2>Lad os bygge noget, der virker</h2>
    <a class="btn" href="/kontakt.php">Kontakt os</a>
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
