<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2019 Worlds | CBrew's Website</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../img/favicon-48x48.png">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">

    <!-- Brand font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Pico.css for semantic, mobile-first defaults -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@2.1.1/css/pico.min.css">
    <!-- Your consolidated site styles (grid, cards, etc.) -->
    <link rel="stylesheet" href="../css/site.css">
</head>

<body>
    <!-- Centered nav -->
    <header class="container">
        <?php include '../nav.php'; ?>
    </header>

    <main class="container">

        <!-- About / Standings -->
        <section id="about" class="flow">
            <a href="../worlds.php" title="Back to Retro overview">
                <img src="../img/icon19.png" alt="2019 Icon" class="site-icon small">
            </a>
            <h1>2019 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2019_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/166" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2019/19rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2019/control.php',    'img' => '../img/cards/pidgey.png',    'title' => 'Pidgey Control'],
                    ['href' => '../worlds/decks/2019/pika.php',       'img' => '../img/cards/pikarom.png',   'title' => 'PikaRom Judge'],
                    ['href' => '../worlds/decks/2019/blac.php',       'img' => '../img/cards/blac.png',      'title' => 'Blowns'],
                    ['href' => '../worlds/decks/2019/gardeon.php',    'img' => '../img/cards/gardeon.png',   'title' => 'Gardeon'],
                    ['href' => '../worlds/decks/2019/mewmew.php',     'img' => '../img/cards/mewmew.png',    'title' => 'Mewtwo Mew'],
                    ['href' => '../worlds/decks/2019/zard.php',       'img' => '../img/cards/reshizard.png', 'title' => 'ReshiZard'],
                    ['href' => '../worlds/decks/2019/pikarom.php',    'img' => '../img/cards/pikarom.png',   'title' => 'PikaRom Lillie'],
                ];
                foreach ($decks as $deck):
                ?>
                    <article>
                        <a href="<?= $deck['href'] ?>">
                            <img loading="lazy" src="<?= $deck['img'] ?>" alt="<?= htmlspecialchars($deck['title']) ?>">
                            <div class="card-label">
                                <h2><?= htmlspecialchars($deck['title']) ?></h2>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <!-- Shared footer -->
    <footer class="container">
        <?php include '../footer.php'; ?>
    </footer>
</body>

</html>