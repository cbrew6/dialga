<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2013 Worlds | CBrew's Website</title>
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
                <img src="../img/icon13.png" alt="2013 Icon" class="site-icon small">
            </a>
            <h1>2013 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2013_WORLDS" class="button">PTCGLegends</a>
                <a href="https://ptcgarchive.com/2013-worlds-standings/" class="button">PTCGArchive</a>
                <a href="https://limitlesstcg.com/tournaments/242" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2013/13rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2013/gor.php',          'img' => '../img/cards/accelgor.png',    'title' => 'Gothitelle Accelgor'],
                    ['href' => '../worlds/decks/2013/darkrai.php',      'img' => '../img/cards/darkrai.png',      'title' => 'Darkrai'],
                    ['href' => '../worlds/decks/2013/ray.php',          'img' => '../img/cards/rayex.png',        'title' => 'RayEels'],
                    ['href' => '../worlds/decks/2013/tdk.php',          'img' => '../img/cards/kyurem.png',       'title' => 'TDK'],
                    ['href' => '../worlds/decks/2013/teamplasma.php',   'img' => '../img/cards/thundy.png',       'title' => 'Team Plasma'],
                    ['href' => '../worlds/decks/2013/klink.php',        'img' => '../img/cards/klinklang.png',    'title' => 'Klinklang'],
                    ['href' => '../worlds/decks/2013/sableye.php',      'img' => '../img/cards/sableye.png',      'title' => 'SableGarb'],
                    ['href' => '../worlds/decks/2013/darkgarb.php',     'img' => '../img/cards/garbsr.png',       'title' => 'Darkrai Garb'],
                    ['href' => '../worlds/decks/2013/flareon.php',      'img' => '../img/cards/flareontp.png',    'title' => 'Flareon'],
                    ['href' => '../worlds/decks/2013/keldeoblas.php',   'img' => '../img/cards/keldeoex.png',     'title' => 'Keldeo Blastoise'],
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