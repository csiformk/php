<?php
require 'models/Database.php';

$db = new Database();
$articles = $db->getAllArticles();

$heading = 'Liste des recettes';

view('article/articles',[
    'heading' => $heading,
    'articles' => $articles
]);