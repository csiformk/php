<?php
require 'Database.php';

$db = new Database();
$articles = $db->query('SELECT * FROM post')->fetchAll();

$heading = 'Liste des recettes';

include 'views/articles.view.php';