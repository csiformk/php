<?php
require 'models/Database.php';
$db = new Database;
$heading = 'Nouvelle recette';

$titre = $contenu = $errors = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    $errors = [];

    $titre = cleanData($_POST['titre']);
    $contenu = cleanData($_POST['contenu']);

   /*  if ( strlen($titre) === 0 || strlen($contenu) === 0 ) :
        $errors[] = 'Champ titre ou contenu vide !!!' ;
    endif; */

    if ( strlen($titre) === 0 ) :
        $errors[] = 'Champ titre vide !!!' ;
    endif;

    if ( strlen($titre) >= 50 ) :
        $errors[] = 'Champ titre depasse les 50 carcatéres !!!' ;
    endif;

    if ( strlen($contenu) === 0 ) :
        $errors[] = 'Champ contenu vide !!!' ;
    endif;

    if ( strlen($contenu) >= 1000 ) :
        $errors[] = 'Champ contenu depasse les 100 carcatéres !!!' ;
    endif;


    if ( empty($errors) ) :
        $db->query('INSERT INTO post (titre, contenu) VALUES (:titre, :contenu)' , [
            'titre' => $titre,
            'contenu' => $contenu
        ]
        );
        header('Location: /articles');
        exit();
    endif;
    
endif;

view('article/article-new',[
    'heading' => $heading,
    'titre' => $titre,
    'contenu' => $contenu,
    'errors' => $errors
]);
