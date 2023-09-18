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
// print_r($tableau2);

$tableau3 = [];
$tableau3[] = 'Janvier';
$tableau3[] = 45;
$tableau3[] = false;

// var_dump($tableau3);

array_push($tableau3, 'Mars', 12, true);

// var_dump($tableau3);

$notes = [12, 14, 8, 10];

$tableauFusion = array_merge($tableau3, $notes);

// var_dump($tableauFusion);
// print_r($tableauFusion);

// Afficher la 2eme note du tableau notes
// var_dump($notes[1]);

//Afficher la note 14 du tableau fusion
// var_dump($tableauFusion[4]);

// Afficher client du tableau 2
// var_dump($tableau2[3][1]);

// Afficher le nombre 8 du tableau 2
// var_dump($tableau2[3][2][2]);

// Tableau associatif

$fruits = [
    'banane' => 'jaune',
    'pomme' => 'rouge',
    'kiwi' => 'vert'
];

$fruits['cassis'] = 'violet';
$fruits['fraise'] = 'rose';

// var_dump($fruits);

// Afficher la couleur du kiwi
// var_dump($fruits['kiwi']);

$chaine = implode('-',$fruits);

// var_dump($chaine);

$fruits2 = explode('-',$chaine);

// var_dump($fruits2);

$planetes = ['mars','terre','uranus','venus','jupiter'];

print_r($planetes);

sort($planetes);

print_r($planetes);