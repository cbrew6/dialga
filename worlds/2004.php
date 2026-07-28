<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2004 Worlds | CBrew's Website</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

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
                <img src="../img/icon04.png" alt="2004 Icon" class="site-icon small">
            </a>
            <h1>2004 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2004_WORLDS" class="button">PTCGLegends</a>
                <a href="https://ptcgarchive.com/2004-worlds-standings/" class="button">PTCGArchive</a>
                <a href="https://compendium.pokegym.net/compendium-ex.html" class="button">Compendium</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2004/04rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    [
                        'href'  => '../worlds/decks/2004/blaz.php',
                        'img'   => '../img/cards/blaziken.png',
                        'title' => 'Blaziken'
                    ],
                    [
                        'href'  => '../worlds/decks/2004/groudon.php',
                        'img'   => '../img/cards/magmagroudon.png',
                        'title' => 'Magma'
                    ],
                    [
                        'href'  => '../worlds/decks/2004/gardy.php',
                        'img'   => '../img/cards/gardy04.png',
                        'title' => 'Gardevoir'
                    ],
                    [
                        'href'  => '../worlds/decks/2004/swamp.php',
                        'img'   => '../img/cards/swampert.png',
                        'title' => 'Swampert'
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