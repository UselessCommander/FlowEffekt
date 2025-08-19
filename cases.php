<?php
  $page = 'cases';
  $title = 'Cases';
  $description = 'Udvalgte projekter fra FlowEffekt. Web, identitet og video der leverer.';
  include __DIR__ . '/partials/header.php';
?>
<section class="page-intro">
  <div class="container">
    <h1>Cases</h1>
    <p>Et lille udpluk. Kontakt os for mere – vi deler gerne flere eksempler.</p>
  </div>
</section>

<section class="case-list">
  <div class="container list">
    <article class="case-card">
      <div class="case-meta"><span class="tag">Web</span> • <span>Identitet</span></div>
      <h3>Værdifulde Liv</h3>
      <p>En rolig, jordet identitet og et hurtigt, tilgængeligt website.</p>
      <a class="link" href="#" aria-disabled="true">Se case (snart)</a>
    </article>
    <article class="case-card">
      <div class="case-meta"><span class="tag">Video</span> • <span>Content</span></div>
      <h3>Sauna Gus Kattinge</h3>
      <p>Sanselig stemningsvideo og brandfortælling med natur i fokus.</p>
      <a class="link" href="#" aria-disabled="true">Se case (snart)</a>
    </article>
  </div>
</section>

<section class="stripe">
  <div class="container">
    <h2>Vil du se noget specifikt?</h2>
    <a class="btn" href="/kontakt.php">Skriv til os</a>
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
