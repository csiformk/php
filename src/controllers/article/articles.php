<?php
require 'models/Database.php';

$db = new Database();
$articles = $db->query('SELECT * FROM post ORDER BY id DESC')->findAll();

$heading = 'Liste des recettes';

view('article/articles',[
    'heading' => $heading,
    'articles' => $articles
]);