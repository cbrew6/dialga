<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2014 Worlds | CBrew's Website</title>
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
                <img src="../img/icon14.png" alt="2014 Icon" class="site-icon small">
            </a>
            <h1>2014 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2014_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/243" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2014/14rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2014/vir.php',           'img' => '../img/cards/virizion.png',     'title' => 'Virizion Genesect'],
                    ['href' => '../worlds/decks/2014/yveltal.php',       'img' => '../img/cards/yveltal.png',      'title' => 'Yveltal Garb'],
                    ['href' => '../worlds/decks/2014/landy.php',         'img' => '../img/cards/landy.png',        'title' => 'Toxic Haymaker'],
                    ['href' => '../worlds/decks/2014/keldeo.php',        'img' => '../img/cards/blackkyurem.png',  'title' => 'Keldeo Blastoise'],
                    ['href' => '../worlds/decks/2014/kang.php',          'img' => '../img/cards/kang.png',         'title' => 'Mega Kangaskhan'],
                    ['href' => '../worlds/decks/2014/gor.php',           'img' => '../img/cards/accelgor.png',     'title' => 'TrevGor'],
                    ['href' => '../worlds/decks/2014/tdk.php',           'img' => '../img/cards/thundy.png',       'title' => 'TDK'],
                    ['href' => '../worlds/decks/2014/virgen.php',        'img' => '../img/cards/drif.png',         'title' => 'VirGen Balloon'],
                    ['href' => '../worlds/decks/2014/landyraichu.php',   'img' => '../img/cards/raichu.png',       'title' => 'Landorus Raichu'],
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