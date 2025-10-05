<?php
  $page = 'cases';
  $title = 'Cases';
  $description = 'Udvalgte projekter fra FlowEffekt. Web, identitet og video der leverer.';
  include __DIR__ . '/partials/header.php';

  // Lille helper til sikker output
  if (!function_exists('e')) {
    function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
  }

  // Base-aware URL helper (works in subfolders on localhost)
  if (!function_exists('fe_base')) {
    function fe_base(){
      $b = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
      return ($b === '/' || $b === '\\') ? '' : $b;
    }
  }
  if (!function_exists('fe_url')) {
    function fe_url($path){
      return fe_base() . '/' . ltrim((string)$path, '/');
    }
  }

  // Indlæs cases fra separat datafil, hvis den findes. Ellers vær tom.
  $dataFile = __DIR__ . '/data/cases.data.php';
  if (is_file($dataFile)) {
    $cases = include $dataFile;
    if (!is_array($cases)) { $cases = []; }
  } else {
    $cases = [];
  }

  // --- Routing & helpers for single case ---
  if (!function_exists('fe_get_case_by_slug')) {
    function fe_get_case_by_slug(array $cases, string $slug): ?array {
      foreach ($cases as $c) {
        if (($c['slug'] ?? '') === $slug) { return $c; }
      }
      return null;
    }
  }
  $currentSlug = isset($_GET['slug']) ? (string)$_GET['slug'] : null;
?>
<?php if (!$currentSlug): ?>
<section class="page-intro">
  <div class="container">
    <h1>Cases</h1>
    <p>Et lille udpluk. Kontakt os for mere – vi deler gerne flere eksempler.</p>
  </div>
</section>

<section class="case-list">
  <div class="container list">
    <?php foreach ($cases as $c): ?>
      <?php
        $title  = $c['title'] ?? '';
        $blurb  = $c['blurb'] ?? '';
        $slug   = $c['slug']  ?? '';
        $tags   = $c['tags']  ?? [];
        $more   = $c['more']  ?? [];
        $status = $c['status'] ?? 'soon';
        // Local-friendly URL using query param (works without .htaccess)
        $url    = fe_url('cases.php?slug=' . $slug);
        $isSoon = ($status !== 'published');
        $img    = $c['img'] ?? ($c['thumb'] ?? '');
      ?>
      <article class="case-card">
        <?php if (!empty($img)): ?>
          <div class="case-thumb-wrap">
            <?php if ($isSoon): ?>
              <img
                src="<?= e($img) ?>"
                alt="<?= e($title) ?>"
                class="case-thumb"
                loading="lazy"
                style="width:100%; border-radius:12px; display:block; aspect-ratio: 16/10; object-fit: cover;"
              >
            <?php else: ?>
              <a href="<?= e($url) ?>" aria-label="Se case: <?= e($title) ?>">
                <img
                  src="<?= e($img) ?>"
                  alt="<?= e($title) ?>"
                  class="case-thumb"
                  loading="lazy"
                  style="width:100%; border-radius:12px; display:block; aspect-ratio: 16/10; object-fit: cover;"
                >
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <div class="case-meta">
          <?php if (!empty($tags)): ?>
            <span class="tag"><?= e($tags[0]) ?></span>
          <?php endif; ?>
          <?php foreach (array_slice($tags, 1) as $t): ?>
            • <span><?= e($t) ?></span>
          <?php endforeach; ?>
          <?php foreach ($more as $m): ?>
            • <span><?= e($m) ?></span>
          <?php endforeach; ?>
        </div>
        <h3><?= e($title) ?></h3>
        <p><?= e($blurb) ?></p>
        <?php if ($isSoon): ?>
          <a class="link" aria-disabled="true">Se case (snart)</a>
        <?php else: ?>
          <a class="link" href="<?= e($url) ?>">Se case</a>
        <?php endif; ?>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php else: ?>
  <?php
    $case = fe_get_case_by_slug($cases, $currentSlug);
    $isPublished = ($case['status'] ?? '') === 'published';
  ?>
  <?php if (!$case || !$isPublished): ?>
    <section class="page-intro">
      <div class="container">
        <h1>Case findes ikke</h1>
        <p>Enten er denne case ikke offentliggjort endnu, eller også findes sluggen ikke.</p>
        <p><a class="link" href="<?= e(fe_url('cases.php')) ?>">← Tilbage til alle cases</a></p>
      </div>
    </section>
  <?php else: ?>
    <section class="page-intro">
      <div class="container">
        <h1><?= e($case['title'] ?? '') ?></h1>
        <?php if (!empty($case['blurb'])): ?>
          <p><?= e($case['blurb']) ?></p>
        <?php endif; ?>
      </div>
    </section>

    <?php if (!empty($case['img'])): ?>
    <section class="case-hero">
      <div class="container">
        <img
          src="<?= e($case['img']) ?>"
          alt="<?= e($case['title'] ?? '') ?>"
          loading="eager"
        />
      </div>
    </section>
    <?php endif; ?>

    <section class="case-body">
      <div class="container" style="max-width: 1000px;">
        <div style="display:grid; gap:24px; grid-template-columns: 1.2fr .8fr;">
          <div>
            <?php if (!empty($case['udfordring'])): ?>
              <h2>Udfordring &amp; mål</h2>
              <?php if (is_array($case['udfordring'])): ?>
                <?php foreach ($case['udfordring'] as $p): ?>
                  <p><?= e($p) ?></p>
                <?php endforeach; ?>
              <?php else: ?>
                <p><?= e($case['udfordring']) ?></p>
              <?php endif; ?>
            <?php endif; ?>

            <?php if (!empty($case['losning'])): ?>
              <h2>Løsning</h2>
              <?php if (is_array($case['losning'])): ?>
                <ul>
                  <?php foreach ($case['losning'] as $li): ?>
                    <li><?= e($li) ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php else: ?>
                <p><?= e($case['losning']) ?></p>
              <?php endif; ?>
            <?php endif; ?>
            <?php if (!empty($case['credits']) && is_array($case['credits'])): ?>
              <h2>Credits</h2>
              <ul>
                <?php foreach ($case['credits'] as $role => $name): ?>
                  <li><strong><?= e($role) ?>:</strong> <?= e($name) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($case['resultat'])): ?>
              <h2>Resultat</h2>
              <?php if (is_array($case['resultat'])): ?>
                <?php foreach ($case['resultat'] as $p): ?>
                  <p><?= e($p) ?></p>
                <?php endforeach; ?>
              <?php else: ?>
                <p><?= e($case['resultat']) ?></p>
              <?php endif; ?>
            <?php endif; ?>

            <?php if (!empty($case['gallery']) && is_array($case['gallery'])): ?>
              <div class="case-gallery" style="display:grid; gap:12px; grid-template-columns:1fr 1fr; margin-top: 12px;">
                <?php foreach ($case['gallery'] as $g): ?>
                  <img src="<?= e($g) ?>" alt="<?= e(($case['title'] ?? 'Case') . ' – billede') ?>" loading="lazy" style="width:100%; border-radius:12px; aspect-ratio:4/3; object-fit:cover;" />
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
          <aside>
            <div class="card">
              <h3 style="margin-top:0;">Fakta</h3>
              <?php
                // Start with custom fakta if provided, otherwise empty array
                $facts = [];
                if (!empty($case['fakta']) && is_array($case['fakta'])) {
                  $facts = $case['fakta'];
                }
                // Ensure Kunde
                if (!array_key_exists('Kunde', $facts) && !empty($case['title'])) {
                  $facts['Kunde'] = $case['title'];
                }
                // Ensure Leverancer
                if (!array_key_exists('Leverancer', $facts) && !empty($case['more'])) {
                  $facts['Leverancer'] = $case['more'];
                }
                // Ensure Kategori (tags)
                if (!array_key_exists('Kategori', $facts) && !empty($case['tags'])) {
                  $facts['Kategori'] = $case['tags'];
                }
                // Optional: År if present at top level
                if (!array_key_exists('År', $facts) && !empty($case['year'])) {
                  $facts['År'] = $case['year'];
                }

                // Render all facts; special-case Link
                foreach ($facts as $label => $value):
                  if (strtolower((string)$label) === 'link' && is_string($value) && $value !== ''): ?>
                    <p><a class="link" href="<?= e($value) ?>" target="_blank" rel="noopener">Besøg website</a></p>
                  <?php else: ?>
                    <p><strong><?= e($label) ?>:</strong> <?= is_array($value) ? e(implode(' · ', $value)) : e((string)$value) ?></p>
                  <?php endif; endforeach; ?>
            </div>
          </aside>
        </div>
        <p style="margin-top:1.2rem;"><a class="link" href="<?= e(fe_url('cases.php')) ?>">← Tilbage til alle cases</a></p>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>

<section class="stripe">
  <div class="container">
    <h2>Vil du se noget specifikt?</h2>
    <a class="btn" href="/kontakt.php">Skriv til os</a>
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>
