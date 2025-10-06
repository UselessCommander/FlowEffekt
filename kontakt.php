<?php
session_start();
$page = 'contact';
$title = 'Kontakt';
$description = 'Kontakt FlowEffekt – lad os starte en dialog om dit projekt.';

// CSRF token
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$success = false;
$errors  = [];

// Safelists til select/radio felter
$packages = [
  'website'   => 'Website / landingside',
  'webshop'   => 'Webshop',
  'branding'  => 'Visuel identitet / design',
  'content'   => 'Foto / video / content',
  'care'      => 'Vedligehold / support',
  'other'     => 'Andet / ved ikke'
];
$budgets = ['<15k','15–40k','40–100k','100k+','Ukendt'];
$timelines = ['Hurtigst muligt','1–2 mdr.','3–6 mdr.','Ukendt'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // CSRF
  $token = $_POST['csrf_token'] ?? '';
  if (!hash_equals($_SESSION['csrf_token'], $token)) {
    $errors[] = 'Ugyldig forespørgsel. Prøv igen.';
  }

  // Inputs
  $name     = trim($_POST['name'] ?? '');
  $email    = trim($_POST['email'] ?? '');
  $message  = trim($_POST['message'] ?? '');
  $package  = $_POST['package'] ?? '';
  $budget   = $_POST['budget']  ?? '';
  $timeline = $_POST['timeline'] ?? '';
  $agree    = isset($_POST['agree']);
  $website  = trim($_POST['website'] ?? ''); // honeypot

  // Validering
  if ($website !== '')                 $errors[] = 'Spam opdaget.';
  if ($name === '')                    $errors[] = 'Skriv dit navn.';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Skriv en gyldig e-mail.';
  if (strlen($message) < 10)           $errors[] = 'Skriv en kort besked (min. 10 tegn).';
  if (!array_key_exists($package, $packages)) $errors[] = 'Vælg hvad du vil have hjælp til.';
  if (!$agree)                         $errors[] = 'Bekræft venligst, at vi må kontakte dig.';

  // Normaliser valgfrie felter (safelist)
  if ($budget !== '' && !in_array($budget, $budgets, true))     $budget = '';
  if ($timeline !== '' && !in_array($timeline, $timelines, true)) $timeline = '';

  if (!$errors) {
    $to = 'kontakt@floweffekt.dk'; // <- Ret til din e-mail
    $subject = 'Kontaktformular – FlowEffekt';
    $body =
"Navn: {$name}
E-mail: {$email}

Hjælp til: " . ($packages[$package] ?? 'Ukendt') . "
Budget: " . ($budget ?: 'Ikke angivet') . "
Tidsramme: " . ($timeline ?: 'Ikke angivet') . "

Besked:
{$message}
";
    $headers = "From: noreply@floweffekt.dk\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8";

    if (@mail($to, $subject, $body, $headers)) {
      $success = true;
      // Nulstil felter efter succes
      $_POST = [];
    } else {
      $errors[] = 'Kunne ikke sende beskeden. Prøv igen senere.';
    }
  }
}

include __DIR__ . '/partials/header.php';
?>
<section class="page-intro">
  <div class="container">
    <h1>Kontakt</h1>
    <p>Fortæl kort om din opgave, og hvad du har brug for – så vender vi hurtigt tilbage.</p>
  </div>
</section>

<section class="contact">
  <div class="container contact-grid">
    <form class="contact-form" method="post" action="/kontakt.php" novalidate>
      <?php if ($success): ?>
        <div class="alert success" role="status">Tak for din besked – vi vender tilbage hurtigst muligt.</div>
      <?php endif; ?>

      <?php if ($errors): ?>
        <div class="alert error" role="alert">
          <ul>
            <?php foreach ($errors as $e): ?><li><?= htmlspecialchars($e) ?></li><?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <div class="input">
        <label for="name">Navn</label>
        <input type="text" id="name" name="name" required autocomplete="name"
               value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
      </div>

      <div class="input">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required autocomplete="email"
               value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
      </div>

      <div class="input">
        <label for="package">Hvad vil du have hjælp til?</label>
        <select id="package" name="package" required>
          <option value="" hidden>Vælg…</option>
          <?php foreach ($packages as $key => $label): ?>
            <option value="<?= $key ?>" <?= (($_POST['package'] ?? '') === $key) ? 'selected' : '' ?>>
              <?= htmlspecialchars($label) ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="input">
        <label for="budget">Budget (valgfrit)</label>
        <select id="budget" name="budget">
          <option value="">Ikke angivet</option>
          <?php foreach ($budgets as $b): ?>
            <option <?= (($_POST['budget'] ?? '') === $b) ? 'selected' : '' ?>><?= $b ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="input">
        <label for="timeline">Tidsramme (valgfrit)</label>
        <select id="timeline" name="timeline">
          <option value="">Ikke angivet</option>
          <?php foreach ($timelines as $t): ?>
            <option <?= (($_POST['timeline'] ?? '') === $t) ? 'selected' : '' ?>><?= $t ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="input">
        <label for="message">Besked</label>
        <textarea id="message" name="message" rows="6" required
                  minlength="10"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
      </div>

      <!-- Honeypot -->
      <input type="text" name="website" class="hp" autocomplete="off" tabindex="-1" aria-hidden="true">

      <div class="input">
        <label style="display:flex;gap:.5rem;align-items:flex-start;">
          <input type="checkbox" name="agree" value="1" <?= isset($_POST['agree']) ? 'checked' : '' ?> required>
          <span>Ja tak, I må kontakte mig om min henvendelse. Jeg accepterer, at mine oplysninger behandles for at kunne besvare mig.</span>
        </label>
      </div>

      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
      <button class="btn" type="submit">Send besked</button>
    </form>

    <aside class="contact-aside">
      <div class="card">
        <h3>Kontaktoplysninger</h3>
        <p><strong>E-mail:</strong> kontakt@floweffekt.dk</p>
        <p><strong>Lokation:</strong> København, Danmark</p>
      </div>
      <div class="card">
        <h3>Vi svarer typisk</h3>
        <p>Inden for 1–2 hverdage.</p>
      </div>
    </aside>
  </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>