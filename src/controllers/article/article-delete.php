<?php
require 'models/Database.php';

$db = new Database();

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

if (!is_numeric($id)) {
   abort();
}

$queryArticle = 'DELETE FROM post where id = :id';

$articleDelete = $db->query($queryArticle, [':id' => $id]);

if (! $articleDelete) {
   abort();
}

header('Location: /articles');
exit();