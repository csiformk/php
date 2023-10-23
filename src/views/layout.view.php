<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Nos recettes</title>
</head>
<body>
<header>
        <h1>Recette</h1>
        <?php include 'partials/nav.php'; ?>
</header>
<main>
    <?php include("$name.view.php"); ?>
</main>
<footer>
    <p>2023 - <a href="/mentions">Mentions Légales</a></p>
</footer>
</body>
</html>