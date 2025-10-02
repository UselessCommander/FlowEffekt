<?php
  // /case.php
  $page = 'case';

  // Lille helper (samme som i cases.php)
  if (!function_exists('e')) {
    function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
  }

  // Slug fra URL
  $slug = isset($_GET['slug']) ? (string)$_GET['slug'] : '';

  // Indlæs cases fra datafil (samme format som i cases.php)
  $dataFile = __DIR__ . '/data/cases.data.php';
  $cases = is_file($dataFile) ? include $dataFile : [];
  if (!is_array($cases)) { $cases = []; }

  // Find den rigtige case
  $case = null;
  foreach ($cases as $c) {
    if (($c['slug'] ?? '') === $slug) { $case = $c; break; }
  }

  if (!$case || (($case['status'] ?? '') !== 'published')) {
    http_response_code(404);
    $title = 'Case ikke fundet';
    $description = 'Den ønskede case blev ikke fundet.';
    include __DIR__ . '/partials/header.php';
    ?>
      <section class="page-intro">
        <div class="container">
          <h1>Case ikke fundet</h1>
          <p class="prose">Vi kunne desværre ikke finde den case. Gå tilbage til oversigten.</p>
          <p><a class="link" href="/cases">Tilbage til cases</a></p>
        </div>
      </section>
    <?php
    include __DIR__ . '/partials/footer.php';
    exit;
  }

  // SEO/meta for den fundne case
  $title = $case['title'] ?? 'Case';
  $description = $case['blurb'] ?? 'Case fra FlowEffekt.';
  include __DIR__ . '/partials/header.php';
?>
<section class="page-intro">
  <div class="container">
    <a class="link" href="/cases">← Tilbage til cases</a>
    <h1><?= e($case['title'] ?? '') ?></h1>
    <?php if (!empty($case['blurb'])): ?>
      <p class="prose"><?= e($case['blurb']) ?></p>
    <?php endif; ?>
    <?php if (!empty($case['tags']) || !empty($case['more'])): ?>
      <p class="case-meta">
        <?php foreach (($case['tags'] ?? []) as $i => $t): ?>
          <?= $i === 0 ? '<span class="tag">'.e($t).'</span>' : ' • <span>'.e($t).'</span>' ?>
        <?php endforeach; ?>
        <?php foreach (($case['more'] ?? []) as $m): ?>
          • <span><?= e($m) ?></span>
        <?php endforeach; ?>
      </p>
    <?php endif; ?>
  </div>
</section>

<?php if (!empty($case['cover'])): ?>
<section>
  <div class="container">
    <img src="<?= e($case['cover']) ?>" alt="<?= e($case['title'] ?? 'Case') ?>" loading="lazy" decoding="async">
  </div>
</section>
<?php endif; ?>

<section class="cards">
  <div class="container grid-3">
    <?php if (!empty($case['deliverables'])): ?>
      <article class="card">
        <h3>Leverancer</h3>
        <ul class="check">
          <?php foreach ($case['deliverables'] as $d): ?>
            <li><?= e($d) ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
    <?php endif; ?>

    <?php if (!empty($case['metrics'])): ?>
      <article class="card">
        <h3>Resultater</h3>
        <div class="metrics-grid">
          <?php foreach ($case['metrics'] as $label => $value): ?>
            <div class="metric"><strong><?= e($value) ?></strong><span><?= e($label) ?></span></div>
          <?php endforeach; ?>
        </div>
      </article>
    <?php endif; ?>

    <?php if (!empty($case['links'])): ?>
      <article class="card">
        <h3>Links</h3>
        <ul class="check">
          <?php foreach ($case['links'] as $text => $href): ?>
            <li><a class="link" href="<?= e($href) ?>" target="_blank" rel="noopener"><?= e($text) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </article>
    <?php endif; ?>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>