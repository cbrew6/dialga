<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Core meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cbrew's Website</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="img/favicon-48x48.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Brand font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Pico.css -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@2.1.1/css/pico.min.css">

    <!-- Site CSS -->
    <link rel="stylesheet" href="css/site.css">
</head>

<body>
    <header class="container">
        <?php include 'nav.php'; ?>
    </header>

    <main class="container">
        <section class="hero">
            <h1>cbrew's Website</h1>
            <p class="tagline">Pokémon TCG tools and archives.</p>
        </section>

        <section class="hub-grid">
            <article class="hub-card">
                <h2>Worlds Archive</h2>
                <p>Every World Championship deck from 2004 to 2025.</p>
                <a href="worlds.php" class="cta">Browse Decks</a>
            </article>

            <article class="hub-card">
                <h2>PTCG Live Tracker</h2>
                <p>Track your Pokémon TCG Live matches and climb the leaderboard.</p>
                <div class="hub-card-links">
                    <a href="/tracker/login.php" class="cta">Log In</a>
                    <a href="/tracker/leaderboard.php" class="cta cta-secondary">Leaderboard</a>
                </div>
            </article>
        </section>
    </main>

    <footer class="container">
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
