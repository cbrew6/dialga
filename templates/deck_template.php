<!DOCTYPE html>
<html lang="en">
<head>
  <!-- core meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= htmlspecialchars("$year – $deckTitle") ?> | CBrew’s Website</title>
  <link rel="icon" type="image/x-icon" href="../../../img/favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="../../../img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../../img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="48x48" href="../../../img/favicon-48x48.png">
  <link rel="apple-touch-icon" href="../../../img/apple-touch-icon.png">

  <!-- Pico + your CSS -->
  <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@2.1.1/css/pico.min.css">
  <link rel="stylesheet" href="/css/site.css">
</head>
<body>
  <header class="container">
    <?php include __DIR__ . '/../nav.php'; ?>
  </header>

  <main class="container">

    <!-- back + icon -->
    <section class="flow" id="about">
      <a href="../../<?= $year ?>.php">
        <img src="<?= htmlspecialchars($deckIcon) ?>" alt="<?= htmlspecialchars($year) ?> Icon" class="site-icon small">
      </a>
      <h1><?= htmlspecialchars($deckTitle) ?></h1>
    </section>

    <!-- turn-1 rules -->
    <section id="turn1-rules" class="flow">
    </section>

    <!-- decklist visual -->
    <section id="decklist" class="flow">
      <?php include $deckListInclude; ?>
    </section>

  </main>

  <footer class="container">
    <?php include __DIR__ . '/../footer.php'; ?>
  </footer>
</body>
</html>
