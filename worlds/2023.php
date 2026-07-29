<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2023 Worlds | CBrew's Website</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../img/favicon-48x48.png">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">

    <!-- Brand font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Pico.css -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@2.1.1/css/pico.min.css">
    <!-- Site-wide styles (grid, cards, tilt, etc.) -->
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
                <img src="../img/icon23.png" alt="2023 Icon" class="site-icon small">
            </a>
            <h1>2023 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2023_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/375" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2023/23rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2023/mew.php',       'img' => '../img/cards/meloetta.png',   'title' => 'FS Mew'],
                    ['href' => '../worlds/decks/2023/gardevoir.php', 'img' => '../img/cards/gardevoirex.png', 'title' => 'Gardevoir'],
                    ['href' => '../worlds/decks/2023/lugia.php',     'img' => '../img/cards/lugia.png',      'title' => 'Colorless Lugia'],
                    ['href' => '../worlds/decks/2023/lzb.php',       'img' => '../img/cards/kyogre.png',     'title' => 'Lost Box'],
                    ['href' => '../worlds/decks/2023/lzbmasters.php',       'img' => '../img/cards/dnite.png',     'title' => 'Lost Box Masters'],
                    ['href' => '../worlds/decks/2023/lztina.php',       'img' => '../img/cards/tina.png',     'title' => 'LZ Tina'],
                    ['href' => '../worlds/decks/2023/urshintel.php',       'img' => '../img/cards/inteleon.png',     'title' => 'Urshifu Inteleon'],
                    ['href' => '../worlds/decks/2023/cpao.php',       'img' => '../img/cards/cpao.png',     'title' => 'Cien Pao'],
                    ['href' => '../worlds/decks/2023/miraidon.php',       'img' => '../img/cards/don.png',     'title' => 'Miraidon'],
                    ['href' => '../worlds/decks/2023/sslugia.php',       'img' => '../img/cards/lugia.png',     'title' => 'SS Lugia'],
                    ['href' => '../worlds/decks/2023/zoroark.php',       'img' => '../img/cards/zoroarks.png',     'title' => 'Zoro Box'],
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

    <!-- Footer -->
    <footer class="container">
        <?php include '../footer.php'; ?>
    </footer>
</body>

</html>