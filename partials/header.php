<!DOCTYPE html>
<html lang="da">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= isset($title) ? htmlspecialchars($title) . ' | FlowEffekt' : 'FlowEffekt' ?></title>
  <meta name="description" content="<?= isset($description) ? htmlspecialchars($description) : 'FlowEffekt skaber moderne, performance-fokuserede websites, identitet og video.' ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Pre-boot theme (prevents FOUC) -->

  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <a class="skip-link" href="#main">Spring til indhold</a>
  <header class="fe-header">
    <div class="container header-inner">
      <a href="/index.php" class="logo" aria-label="FlowEffekt forside">Flow<span>Effekt</span></a>
      <button class="burger" aria-expanded="false" aria-controls="site-nav" aria-label="Åbn menu">
        <span></span><span></span><span></span>
      </button>
      <nav id="site-nav" class="nav">
        <a href="/services.php" class="<?= ($page ?? '') === 'services' ? 'active' : '' ?>">Services</a>
        <a href="/cases.php" class="<?= ($page ?? '') === 'cases' ? 'active' : '' ?>">Cases</a>
        <a href="/om-os.php" class="<?= ($page ?? '') === 'about' ? 'active' : '' ?>">Om os</a>
        <a href="/kontakt.php" class="cta <?= ($page ?? '') === 'contact' ? 'active' : '' ?>">Kontakt</a>

        <!-- ÉN knap, ingen menu -->
        <button id="theme-toggle" class="theme-toggle" aria-label="Skift tema" title="Skift tema"></button>
      </nav>

    </div>
  </header>
  <main id="main" class="fe-main">
