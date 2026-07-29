<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2009 Worlds | CBrew's Website</title>
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
                <img src="../img/icon09.png" alt="2009 Icon" class="site-icon small">
            </a>
            <h1>2009 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2009_WORLDS" class="button">PTCGLegends</a>
                <a href="https://ptcgarchive.com/2009-worlds-standings/" class="button">PTCGArchive</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2009/09rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    [
                        'href'  => '../worlds/decks/2009/spbox.php',
                        'img'   => '../img/cards/skuntank.png',
                        'title' => 'SP Toolbox'
                    ],
                    [
                        'href'  => '../worlds/decks/2009/gen.php',
                        'img'   => '../img/cards/gengar.png',
                        'title' => 'Gengar'
                    ],
                    [
                        'href'  => '../worlds/decks/2009/fly.php',
                        'img'   => '../img/cards/flygon.png',
                        'title' => 'Stallgon'
                    ],
                    [
                        'href'  => '../worlds/decks/2009/bee.php',
                        'img'   => '../img/cards/beedrill.png',
                        'title' => 'LuxDrill'
                    ],
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