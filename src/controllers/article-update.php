<?php
require 'models/Database.php';
$db = new Database;
$heading = 'Modifcation recette';

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

if (!is_numeric($id)) {
    abort();
 }
 
 $queryArticle = 'SELECT * FROM post where id = :id';
 $articleUpdate = $db->query($queryArticle, [':id' => $id])->find();
 
 if (! $articleUpdate) {
    abort();
 }

$titre = $contenu = $errors = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    $errors = [];

    $titre = cleanData($_POST['titre']);
    $contenu = cleanData($_POST['contenu']);

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
        $db->query('UPDATE post SET titre = :titre , contenu = :contenu WHERE id = :id' , [
            'id' => $id,
            'titre' => $titre,
            'contenu' => $contenu
        ]
        );
        header('Location: /articles');
        exit();
    endif;
    
endif;

view('article-update',[
    'heading' => $heading,
    'titre' => $articleUpdate['titre'],
    'contenu' => $articleUpdate['contenu'],
    'errors' => $errors
]);
