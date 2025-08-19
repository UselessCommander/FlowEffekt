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
  $errors = [];

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'], $token)) {
      $errors[] = 'Ugyldig forespørgsel. Prøv igen.';
    }

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $website = trim($_POST['website'] ?? ''); // honeypot

    if ($website !== '') $errors[] = 'Spam opdaget.';
    if ($name === '') $errors[] = 'Skriv dit navn.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Skriv en gyldig e-mail.';
    if (strlen($message) < 10) $errors[] = 'Skriv en kort besked (min. 10 tegn).';

    if (!$errors) {
      $to = 'hello@floweffekt.dk'; // <-- ret til din e-mail
      $subject = 'Kontaktformular – FlowEffekt';
      $body = "Navn: {$name}\nE-mail: {$email}\n\nBesked:\n{$message}\n";
      $headers = "From: noreply@floweffekt.dk\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8";

      // Forsøg at sende mail (kan kræve serveropsætning)
      if (@mail($to, $subject, $body, $headers)) {
        $success = true;
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
    <p>Fortæl kort om din opgave, budget og ønsket tidsplan – så vender vi hurtigt tilbage.</p>
  </div>
</section>

<section class="contact">
  <div class="container contact-grid">
    <form class="contact-form" method="post" action="/kontakt.php" novalidate>
      <?php if ($success): ?>
        <div class="alert success">Tak for din besked – vi vender tilbage hurtigst muligt.</div>
      <?php endif; ?>

      <?php if ($errors): ?>
        <div class="alert error">
          <ul>
            <?php foreach ($errors as $e): ?><li><?= htmlspecialchars($e) ?></li><?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <div class="input">
        <label for="name">Navn</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="input">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input">
        <label for="message">Besked</label>
        <textarea id="message" name="message" rows="6" required></textarea>
      </div>
      <!-- Honeypot -->
      <input type="text" name="website" class="hp" autocomplete="off" tabindex="-1">

      <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
      <button class="btn" type="submit">Send besked</button>
    </form>

    <aside class="contact-aside">
      <div class="card">
        <h3>Kontaktoplysninger</h3>
        <p><strong>E-mail:</strong> hello@floweffekt.dk</p>
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
