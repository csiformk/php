<?php
require 'models/Database.php';

$db = new Database();

$id = $_GET['id'];

$queryArticle = 'SELECT * FROM post where id = :id';

$article = $db->query($queryArticle, [':id' => $id])->find();

if (! $article) {
   abort();
}

include 'views/article.view.php';
