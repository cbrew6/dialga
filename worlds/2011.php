<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>2011 Worlds | CBrew's Website</title>
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
                <img src="../img/icon11.png" alt="2011 Icon" class="site-icon small">
            </a>
            <h1>2011 Standings</h1>
            <p>
                <a href="https://www.ptcglegends.com/tournaments/2011_WORLDS" class="button">PTCGLegends</a>
                <a href="https://ptcgarchive.com/2011-worlds-standings/" class="button">PTCGArchive</a>
                <a href="https://limitlesstcg.com/tournaments/240" class="button">Limitless</a>
            </p>
        </section>

        <!-- Turn-1 Rules -->
        <section id="turn1-rules" class="flow">
            <?php include 'decks/2011/11rules.php'; ?>
        </section>

        <!-- Decks Grid -->
        <section id="decks" class="flow">
            <div class="grid-3">
                <?php
                $decks = [
                    ['href' => '../worlds/decks/2011/emboar.php', 'img' => '../img/cards/emboar.png',      'title' => 'MagneBoar'],
                    ['href' => '../worlds/decks/2011/mag.php',    'img' => '../img/cards/magnezone.png',  'title' => 'Megazone'],
                    ['href' => '../worlds/decks/2011/plume.php',  'img' => '../img/cards/plume.png',      'title' => 'The Truth'],
                    ['href' => '../worlds/decks/2011/ty.php',     'img' => '../img/cards/typhlosion.png', 'title' => 'Reshiphlosion'],
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