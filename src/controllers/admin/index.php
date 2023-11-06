<?php
require 'models/Database.php';

$db = new Database();
$articlesAdmin = $db->query('SELECT * FROM post ORDER BY id DESC')->findAll();

$heading = 'Admin';

view('admin/index',[
    'heading' => $heading,
    'articles' => $articlesAdmin
]);