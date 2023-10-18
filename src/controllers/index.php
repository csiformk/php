<?php
include './fonctions.php';
require './Database.php';

$db = new Database();
$articles = $db->query('SELECT * FROM post')->fetchAll();

include './views/index.view.php';