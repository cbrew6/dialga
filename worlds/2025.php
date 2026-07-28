<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2025 Worlds | CBrew's Website</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

    <!-- Brand font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Pico.css for semantic, mobile-first defaults -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@2.1.1/css/pico.min.css">
    <!-- Your consolidated site styles (grid, cards, tilt, etc.) -->
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
                <img src="../img/25.png" alt="2025 Icon" class="site-icon small">
            </a>
            <h1>2025 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2025_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/500" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2025/25rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                // Replace this placeholder array with your actual 2025 deck entries
                $decks = [
                    [
                        'href'  => '../worlds/decks/2025/flutterdevo.php',
                        'img'   => '../img/cards/gardevoirex.png',
                        'title' => 'Flutter Devo Gardevoir'
                    ],
                    [
                        'href'  => '../worlds/decks/2025/jprb.php',
                        'img'   => '../img/cards/rb.png',
                        'title' => 'JP Raging Bolt'
                    ],
                    [
                        'href'  => '../worlds/decks/2025/pultbomb.php',
                        'img'   => '../img/cards/pult.png',
                        'title' => 'Pult Bomb'
                    ],
                    [
                        'href'  => '../worlds/decks/2025/joltdengo.php',
                        'img'   => '../img/cards/dengo.png',
                        'title' => 'Joltdengo'
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