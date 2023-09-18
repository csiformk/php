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

// $planetes = ['mars','terre','uranus','venus','jupiter'];
$planetes = [
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter'
];

// print_r($planetes);

// sort($planetes);
// asort($planetes);
// rsort($planetes);
// ksort($planetes);
// arsort($planetes);
// krsort($planetes);

// print_r($planetes);

$tab = [];
$tab[] = ['A','B','C'];
$tab[] = ['Q','R','T'];
$tab[] = ['E','U','P','I'];

// print_r($tab);

// Afficher le mot CEPPIC avec les lettres du tableau $tab

// print_r($tab[0][2].$tab[2][0].$tab[2][2].$tab[2][2].$tab[2][3].$tab[0][2]);

$person1 = [
    'nom' => 'Carle',
    'prenom' => 'Awa',
    'email' => 'cawa@yahoo.com'
];

$people = [
    $person1,
    [
        'nom' => 'Mourad',
        'prenom' => 'Michel',
        'email' => 'moumi@caramail.com'
    ],
    [
        'nom' => 'Dupond',
        'prenom' => 'Lucie',
        'email' => 'ludu@gmail.com'
    ]
];

// print_r($people);

// Afiicher les phrase suivantes :
// Le nom de Lucie est Dupond.
// L'email de Mourad est mouni@caramail.com

// print_r('Le nom de ' . $people[2]['prenom'] . ' est ' . $people[2]['nom'] . '.');

// print_r("L'email de " . $people[1]['nom'] . ' est ' . $people[1]['email'] . '.');

$jsonFile = json_encode($people);

// print_r($jsonFile);

$jsonPerson = '{
    "nom" : "Pont",
    "prenom" : "Albert",
    "email" : "ponal@yahoo.fr",
    "couleur" : ["rouge","vert","jaune"],
    "image" : "http://ximg.es/128x128/000/fff"
}';

$jsonPersonArray = json_decode($jsonPerson,true);

// print_r($jsonPersonArray);
?>
<figure>
    <img src="<?=$jsonPersonArray['image']?>">
    <figcaption>
    <ul>
        <li><?=$jsonPersonArray['prenom']?> <?=$jsonPersonArray['nom']?></li>
        <li><?=$jsonPersonArray['email']?></li>
    </ul>
    </figcaption>
</figure>
