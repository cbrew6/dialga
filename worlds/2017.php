<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2017 Worlds | CBrew's Website</title>
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
                <img src="../img/icon17.png" alt="2017 Icon" class="site-icon small">
            </a>
            <h1>2017 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2017_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/72" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2017/17rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2017/nine.php',      'img' => '../img/cards/ninetales.png',  'title' => 'Alolan Ninetales'],
                    ['href' => '../worlds/decks/2017/gardy.php',     'img' => '../img/cards/gardygx.png',     'title' => 'Gardy'],
                    ['href' => '../worlds/decks/2017/goli.php',      'img' => '../img/cards/goli.png',        'title' => 'Golisodor'],
                    ['href' => '../worlds/decks/2017/deci.php',      'img' => '../img/cards/decigx.png',      'title' => 'Decipod'],
                    ['href' => '../worlds/decks/2017/espeon.php',    'img' => '../img/cards/espeon.png',      'title' => 'Espeon Garb'],
                    ['href' => '../worlds/decks/2017/mray.php',      'img' => '../img/cards/mray.png',        'title' => 'Mega Ray'],
                    ['href' => '../worlds/decks/2017/volcanion.php', 'img' => '../img/cards/volc.png',        'title' => 'Volcanion'],
                    ['href' => '../worlds/decks/2017/hooh.php',      'img' => '../img/cards/hooh.png',        'title' => 'Ho-oh Salazzle'],
                    ['href' => '../worlds/decks/2017/drampa.php',    'img' => '../img/cards/drampa.png',      'title' => 'Drampa Garb'],
                    ['href' => '../worlds/decks/2017/decitales.php',    'img' => '../img/cards/decigx.png',      'title' => 'DeciTales'],
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