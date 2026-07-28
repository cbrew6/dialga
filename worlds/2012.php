<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2012 Worlds | CBrew's Website</title>
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
                <img src="../img/icon12.png" alt="2012 Icon" class="site-icon small">
            </a>
            <h1>2012 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2012_WORLDS" class="button">PTCGLegends</a>
                <a href="https://ptcgarchive.com/2012-worlds-standings/" class="button">PTCGArchive</a>
                <a href="https://limitlesstcg.com/tournaments/241" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2012/12rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2012/eels.php',     'img' => '../img/cards/raikou.png',        'title' => 'EelTwo'],
                    ['href' => '../worlds/decks/2012/mewtwo.php',   'img' => '../img/cards/mewtwoex.png',      'title' => 'Terrakion Mewtwo'],
                    ['href' => '../worlds/decks/2012/cmt.php',      'img' => '../img/cards/celebi.png',        'title' => 'CMT'],
                    ['href' => '../worlds/decks/2012/darkrai.php',  'img' => '../img/cards/darkrai.png',       'title' => 'Darkrai Mewtwo'],
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