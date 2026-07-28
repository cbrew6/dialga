<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worlds Archive | cbrew's Website</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Pico.css -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@2.1.1/css/pico.min.css">

    <!-- Site styles -->
    <link rel="stylesheet" href="css/site.css">
</head>

<body>
    <header class="container">
        <?php include 'nav.php'; ?>
    </header>

    <main>
        <section id="years">
            <div class="container">
                <h1>World Championship Archive</h1>
            </div>
            <div class="container grid-3">
                <?php
                $years = [
                    ['year' => 2025, 'img' => 'img/25.png',  'label' => '2025 Worlds',      'decks' => 4,  'lazy' => false],
                    ['year' => 2024, 'img' => 'img/24.png',  'label' => '2024 Worlds',      'decks' => 4,  'lazy' => false],
                    ['year' => 2023, 'img' => 'img/23.png',  'label' => '2023 Worlds',      'decks' => 11, 'lazy' => false],
                    ['year' => 2022, 'img' => 'img/22.jpg',  'label' => '2022 Worlds',      'decks' => 13, 'lazy' => false],
                    ['year' => 2021, 'img' => 'img/21.jpg',  'label' => '2021 Players Cup', 'decks' => 4,  'lazy' => true],
                    ['year' => 2020, 'img' => 'img/20.jpg',  'label' => '2020 Players Cup', 'decks' => 4,  'lazy' => true],
                    ['year' => 2019, 'img' => 'img/19.jpg',  'label' => '2019 Worlds',      'decks' => 7,  'lazy' => true],
                    ['year' => 2018, 'img' => 'img/18.jpg',  'label' => '2018 Worlds',      'decks' => 8,  'lazy' => true],
                    ['year' => 2017, 'img' => 'img/17.jpg',  'label' => '2017 Worlds',      'decks' => 10, 'lazy' => true],
                    ['year' => 2016, 'img' => 'img/16.jpg',  'label' => '2016 Worlds',      'decks' => 11, 'lazy' => true],
                    ['year' => 2015, 'img' => 'img/15.jpg',  'label' => '2015 Worlds',      'decks' => 10, 'lazy' => true],
                    ['year' => 2014, 'img' => 'img/14.jpg',  'label' => '2014 Worlds',      'decks' => 9,  'lazy' => true],
                    ['year' => 2013, 'img' => 'img/13.jpg',  'label' => '2013 Worlds',      'decks' => 10, 'lazy' => true],
                    ['year' => 2012, 'img' => 'img/12.jpg',  'label' => '2012 Worlds',      'decks' => 4,  'lazy' => true],
                    ['year' => 2011, 'img' => 'img/11.jpg',  'label' => '2011 Worlds',      'decks' => 4,  'lazy' => true],
                    ['year' => 2010, 'img' => 'img/10.jpg',  'label' => '2010 Worlds',      'decks' => 4,  'lazy' => true],
                    ['year' => 2009, 'img' => 'img/09.jpg',  'label' => '2009 Worlds',      'decks' => 4,  'lazy' => true],
                    ['year' => 2008, 'img' => 'img/08.jpg',  'label' => '2008 Worlds',      'decks' => 4,  'lazy' => true],
                    ['year' => 2007, 'img' => 'img/07.jpg',  'label' => '2007 Worlds',      'decks' => 4,  'lazy' => true],
                    ['year' => 2006, 'img' => 'img/06.jpg',  'label' => '2006 Worlds',      'decks' => 4,  'lazy' => true],
                    ['year' => 2005, 'img' => 'img/05.jpg',  'label' => '2005 Worlds',      'decks' => 4,  'lazy' => true],
                    ['year' => 2004, 'img' => 'img/04.jpg',  'label' => '2004 Worlds',      'decks' => 4,  'lazy' => true],
                ];
                foreach ($years as $y):
                    $lazy = $y['lazy'] ? ' loading="lazy"' : '';
                ?>
                    <article>
                        <a href="worlds/<?= $y['year'] ?>.php">
                            <img<?= $lazy ?> src="<?= $y['img'] ?>" alt="<?= $y['label'] ?>">
                            <div class="card-label">
                                <h2><?= $y['label'] ?></h2>
                                <p class="deck-count"><?= $y['decks'] ?> decks</p>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="container">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
