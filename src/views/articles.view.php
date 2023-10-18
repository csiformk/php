<?php
include 'partials/header.php';
?>

<main>
    <h2><?= $heading ?></h2>

    <section>
        <ul>
            <?php foreach ($articles as $article) : ?>
                <li><a href="show.php?id=<?= $article['id'] ?>"><?= $article['titre'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </section>

</main>


<?php
include 'partials/footer.php';
?>