<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2015 Worlds | CBrew's Website</title>
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
                <img src="../img/icon15.png" alt="2015 Icon" class="site-icon small">
            </a>
            <h1>2015 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2015_WORLDS" class="button">PTCGLegends</a>
                <a href="https://limitlesstcg.com/tournaments/244" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2015/15rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2015/groudon.php', 'img' => '../img/cards/groudon.png',     'title' => 'Primal Groudon'],
                    ['href' => '../worlds/decks/2015/landy.php',   'img' => '../img/cards/landy.png',       'title' => 'Landy Bats'],
                    ['href' => '../worlds/decks/2015/toad.php',    'img' => '../img/cards/seismitoad.png',  'title' => 'Toad Manectric'],
                    ['href' => '../worlds/decks/2015/archy.php',   'img' => '../img/cards/blastoise.png',   'title' => 'Archiestoise'],
                    ['href' => '../worlds/decks/2015/arom.php',    'img' => '../img/cards/arom.png',        'title' => 'Aromatisse Box'],
                    ['href' => '../worlds/decks/2015/mtric.php',   'img' => '../img/cards/tric.png',        'title' => 'Mega Manectric'],
                    ['href' => '../worlds/decks/2015/gengar.php', 'img' => '../img/cards/pgengar.png',     'title' => 'Trevenant Gengar'],
                    ['href' => '../worlds/decks/2015/raichubats.php', 'img' => '../img/cards/raichu.png',     'title' => 'Raichu Bats'],
                    ['href' => '../worlds/decks/2015/donphan.php', 'img' => '../img/cards/donphan.png',     'title' => 'Donphan'],
                    ['href' => '../worlds/decks/2015/toadbats.php', 'img' => '../img/cards/toad.png',     'title' => 'Toad Bats'],
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