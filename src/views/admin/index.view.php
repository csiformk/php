<?php
dd($model);
?>
<h2><?= $model['heading'] ?></h2>
    <section>
        <ul>
            <?php foreach ($model['articles'] as $article) : ?>
                <li>
                <?= $article['id'] ?> - <a href="/article?id=<?= $article['id'] ?>">
                        <?= $article['titre'] ?>
                    </a> <a href="/article-delete?id=<?=$article['id']?>" onClick="return confirm('Etes-vous certain de supprimer cet article !?');" class="btn-supp ml1">X</a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p><a href="/article-new">Ajouter une nouvelle recette</a></p>
    </section>