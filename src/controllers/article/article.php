<?php
require 'models/Database.php';

$db = new Database();

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

if (!is_numeric($id)) {
   abort();
}

$queryArticle = 'SELECT * FROM post where id = :id';

$article = $db->query($queryArticle, [':id' => $id])->find();

if (! $article) {
   abort();
}

view('article/article',[
   'article' => $article
]);