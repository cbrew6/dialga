<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2024 Worlds | CBrew's Website</title>
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
                <img src="../img/24.png" alt="2024 Icon" class="site-icon small">
            </a>
            <h1>2024 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2024_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/420" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2024/24rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                // Replace this placeholder array with your actual 2024 deck entries
                $decks = [
                    [
                        'href'  => '../worlds/decks/2024/ancientbox.php',
                        'img'   => '../img/cards/ab.png',
                        'title' => 'Ancient Box'
                    ],
                    [
                        'href'  => '../worlds/decks/2024/drago.php',
                        'img'   => '../img/cards/drago.png',
                        'title' => 'Regidrago'
                    ],
                    [
                        'href'  => '../worlds/decks/2024/don.php',
                        'img'   => '../img/cards/don.png',
                        'title' => 'Miraidon'
                    ],
                    [
                        'href'  => '../worlds/decks/2024/thorns.php',
                        'img'   => '../img/cards/thorns.png',
                        'title' => 'Iron Thorns'
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