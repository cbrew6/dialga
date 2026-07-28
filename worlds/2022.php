<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2022 Worlds | CBrew's Website</title>
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
                <img src="../img/icon22.png" alt="2022 Icon" class="site-icon small">
            </a>
            <h1>2022 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2022_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/314" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2022/22rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2022/icepalkia.php',    'img' => '../img/cards/icecaly.png',     'title' => 'Ice Rider Palk Intel'],
                    ['href' => '../worlds/decks/2022/arcintel.php',    'img' => '../img/cards/arcvstar.png',     'title' => 'Arceus Inteleon'],
                    ['href' => '../worlds/decks/2022/rsurshifu.php',    'img' => '../img/cards/rsurshifu.png',    'title' => 'Urshifu Inteleon'],
                    ['href' => '../worlds/decks/2022/fsmew.php',        'img' => '../img/cards/meloetta.png',     'title' => 'FS Mew'],
                    ['href' => '../worlds/decks/2022/adp.php',          'img' => '../img/cards/flyingpika.png',   'title' => 'Arceus Deci Pika'],
                    ['href' => '../worlds/decks/2022/dtemew.php',       'img' => '../img/cards/mewvmax.png',      'title' => 'DTE Mew'],
                    ['href' => '../worlds/decks/2022/icepalkbib.php',   'img' => '../img/cards/icecaly.png',     'title' => 'Ice Rider Palk Bib'],
                    ['href' => '../worlds/decks/2022/radzard.php',      'img' => '../img/cards/radzard.png',      'title' => 'Rad Zard Inteleon'],
                    ['href' => '../worlds/decks/2022/regis.php',        'img' => '../img/cards/regigigas.png',    'title' => 'Regis'],
                    ['href' => '../worlds/decks/2022/mewtwocontrol.php', 'img' => '../img/cards/mewtwounion.jpg',  'title' => 'Mewtwo Control'],
                    ['href' => '../worlds/decks/2022/dialga.php',       'img' => '../img/cards/dialga.png',       'title' => 'Dialga'],
                    ['href' => '../worlds/decks/2022/palkia.php',       'img' => '../img/cards/palkia.png',       'title' => 'Palkia Inteleon'],
                    ['href' => '../worlds/decks/2022/stones.php',       'img' => '../img/cards/stonjourner.png',  'title' => 'Stonjourner'],
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