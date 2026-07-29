<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2018 Worlds | CBrew's Website</title>
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
                <img src="../img/icon18.png" alt="2018 Icon" class="site-icon small">
            </a>
            <h1>2018 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2018_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/94" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2018/18rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2018/zoro.php',     'img' => '../img/cards/zoro.png',      'title' => 'Zoro Garb'],
                    ['href' => '../worlds/decks/2018/raygx.php',    'img' => '../img/cards/raygx.png',     'title' => 'Rayquaza'],
                    ['href' => '../worlds/decks/2018/buzz.php',     'img' => '../img/cards/buzz.png',      'title' => 'Buzzroc'],
                    ['href' => '../worlds/decks/2018/banette.php',  'img' => '../img/cards/banette.png',   'title' => 'Banette Garb'],
                    ['href' => '../worlds/decks/2018/zygarde.php',  'img' => '../img/cards/zygarde.png',   'title' => 'Zygarde'],
                    ['href' => '../worlds/decks/2018/yveltal.php',  'img' => '../img/cards/yveltalb.png',  'title' => 'Yveltal'],
                    ['href' => '../worlds/decks/2018/zoropod.php',  'img' => '../img/cards/zoro.png',      'title' => 'ZoroPod'],
                    ['href' => '../worlds/decks/2018/malamar.php',  'img' => '../img/cards/malamar.png',      'title' => 'Malamar'],
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