<?php
declare(strict_types=1);

function dbug($value) {
    echo '<pre style="background-color:black;color:white;padding:15px;overflow: auto;">';
    // var_dump($value);
    print_r($value);
    echo '</pre>';
}

function dd($value) {
    dbug($value);
    die("Script arrété !!!!");
}

function view(string $name, string | array $model)
{
    return require 'views/layout.view.php';
}

function cleanData($value)
{
 return trim(filter_var($value, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
}