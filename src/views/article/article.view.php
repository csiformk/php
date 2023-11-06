<h3><?= $model['article']['titre'] ?></h3>

<p><?= $model['article']['contenu'] ?></p>

<p>Publié(e) le : <?= $model['article']['created_at'] ?></p>

<p>
<a href="/article-update?id=<?=$model['article']['id']?>" class="btn-mod">
Modifier cet article
</a>
</p>

<p>
    <a href="/article-delete?id=<?=$model['article']['id']?>" onClick="return confirm('Etes-vous certain de supprimer cet article !?');" class="btn-supp">
    Supprimer cet article
</a>
</p>

<p><a href="/articles">Retour à la liste des articles</a></p>