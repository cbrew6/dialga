<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2016 Worlds | CBrew's Website</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

    <!-- Brand font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Pico.css for mobile-first defaults -->
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
                <img src="../img/icon16.png" alt="2016 Icon" class="site-icon small">
            </a>
            <h1>2016 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2016_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/140" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2016/16rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2016/audino.php',       'img' => '../img/cards/audino.png',      'title' => 'Mega Audino'],
                    ['href' => '../worlds/decks/2016/yan.php',          'img' => '../img/cards/yanmega.png',     'title' => 'Yanmega'],
                    ['href' => '../worlds/decks/2016/tina.php',         'img' => '../img/cards/tinaex.png',      'title' => 'Darkrai Tina'],
                    ['href' => '../worlds/decks/2016/ninja.php',        'img' => '../img/cards/ninja.png',       'title' => 'Greninja'],
                    ['href' => '../worlds/decks/2016/vespi.php',        'img' => '../img/cards/vespi.png',       'title' => 'VespiPlume'],
                    ['href' => '../worlds/decks/2016/bronzong.php',     'img' => '../img/cards/bronzong.png',    'title' => 'Bronzong'],
                    ['href' => '../worlds/decks/2016/sceptile.php',     'img' => '../img/cards/sceptile.png',    'title' => 'Sceptile'],
                    ['href' => '../worlds/decks/2016/nightmarch.php',   'img' => '../img/cards/joltik.png',      'title' => 'Night March'],
                    ['href' => '../worlds/decks/2016/toadbox.php',      'img' => '../img/cards/seismitoad.png',  'title' => 'Water Toad'],
                    ['href' => '../worlds/decks/2016/plumebox.php',     'img' => '../img/cards/vileplumeao.png', 'title' => 'Plume Box'],
                    ['href' => '../worlds/decks/2016/carbink.php',     'img' => '../img/cards/carbink.png', 'title' => 'Carbink Zygarde'],
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