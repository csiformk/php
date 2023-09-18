<?php

//https://www.php.net/manual/fr/book.array.php

// Tableau indexé

$tableau1 = [];
// $tableau1 = array();

$tableau2 = [true, 4, 5.8, [5, 'client', ['user',8.9,8]]];

$tableau2 = [
    true, 
    4, 
    5.8, 
    [
        5, 
        'client', 
        [
            'user',
            8.9,
            8
        ]
    ]
];
var_dump($tableau2);