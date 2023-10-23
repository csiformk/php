<?php
require 'models/Database.php';

$db = new Database();
$articles = $db->query('SELECT * FROM post')->findAll();

$heading = 'Liste des recettes';

view('articles',[
    'heading' => $heading,
    'articles' => $articles
]);