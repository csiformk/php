<?php
require 'models/Database.php';
$db = new Database;
$heading = 'Nouvelle recette';

if ($_SERVER['REQUEST_METHOD'] === 'POST'):

    $titre = cleanData($_POST['titre']);
    $contenu = cleanData($_POST['contenu']);

    // if ( empty($titre) || empty($contenu) ) :
    if ( strlen($titre) === 0 || strlen($contenu) === 0 ) :
        echo 'Champ titre ou contenu vide !!!' ;
        exit();
    else:
        $db->query('INSERT INTO post (titre, contenu) VALUES (:titre, :contenu)' , [
            'titre' => $titre,
            'contenu' => $contenu
        ]
        );
    endif;
    header('Location: /articles');
    exit();
    
endif;

view('article-new',$heading);
