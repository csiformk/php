<?php

function dbug($value) {
    echo '<pre style="background-color:black;color:white;padding:15px;overflow: auto;">';
    var_dump($value);
    echo '</pre>';
}

function dd($value) {
    dbug($value);
    die("Script arrété !!!!");
}