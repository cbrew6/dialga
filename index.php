<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cbrew's Website</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Brand font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Pico.css -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@2.1.1/css/pico.min.css">

    <!-- Site CSS -->
    <link rel="stylesheet" href="css/site.css">

    <!-- Preload hero image -->
    <link rel="preload" as="image" href="img/pokemonwc.png">
</head>

<body>
    <header class="container">
        <?php include 'nav.php'; ?>
    </header>

    <main class="container">
        <section class="hero">
            <a href="worlds.php">
                <img src="img/pokemonwc.png" alt="Pokémon World Championships logo" fetchpriority="high">
            </a>

            <h1>cbrew's Pokémon TCG Worlds Archive</h1>
            <p class="tagline">All my World Championship format decks from 2004 to 2025, all in one place.</p>

            <a href="worlds.php" class="cta">Browse Decks</a>

            <div class="stats">
                <div class="stat">
                    <span class="stat-number">22</span>
                    <span class="stat-label">Years</span>
                </div>
                <div class="stat">
                    <span class="stat-number">140+</span>
                    <span class="stat-label">Decks</span>
                </div>
                <div class="stat">
                    <span class="stat-number">8,400+</span>
                    <span class="stat-label">Cards</span>
                </div>
            </div>
        </section>
    </main>

    <footer class="container">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>