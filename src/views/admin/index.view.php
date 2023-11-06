<h2><?= $model['heading'] ?></h2>
    <section>
        <p><a href="/article-new">Ajouter une nouvelle recette</a></p>
        <table>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Actions</th>
        </tr>    
        <?php 
        $i = 1;
        foreach ($model['articles'] as $article) : ?>
                <tr>
                <td><?=$i?></td>
                <td><?=$article['id']?></td>
                <td><?=$article['titre']?></td>
                <td><?=substr($article['contenu'],0,10). ' (...)'?></td>
                <td>
                    <a href="/article?id=<?=$article['id']?>">Voir</a>
                    <a href="/article-update?id=<?=$article['id']?>">Editer</a>
                    <a href="/article-delete?id=<?=$article['id']?>" onClick="return confirm('Etes-vous certain de supprimer cet article !?');">Supprimer</a>
                </td>
        </tr>
            <?php 
        $i++;
        endforeach; ?>
        </table>
        
    </section>