<?php
require 'models/Database.php';
$db = new Database;

$users = $db->getAllUsers();

$heading = 'Nouvelle recette';

$titre = $contenu = $errors = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    $errors = [];

    $titre = cleanData($_POST['titre']);
    $contenu = cleanData($_POST['contenu']);
    $user_id = $_POST['user'];

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

    if(empty($user_id) || strlen($user_id === 0)) :
        $errors[] = 'Aucun auteur séléctionné !!!';
    endif;


    if ( empty($errors) ) :
         $db->query('INSERT INTO post (titre, contenu, user_id) 
         VALUES 
         (:titre, :contenu, :user_id)' 
         , 
         [
            'titre' => $titre,
            'contenu' => $contenu,
            'user_id' => $user_id
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
    'errors' => $errors,
    'users' => $users
]);
