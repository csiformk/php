<?php
require '../fonctions/index.php';

// $planetes = ['mars','uranus','jupiter','terre','saturne'];

// foreach($planetes as $planete) {
//     echo "$planete<br>";
// }

// foreach('test' as $planete):
//     echo "$planete";
// endforeach;

// foreach($planetes as $planete):
//     echo "$planete<br>";
// endforeach;

// foreach($planetes as $key => $planete):
//     // echo "$key : $planete<br>";
//     echo $key . ' : ' . $planete . '<br>';
// endforeach;

// $numbers = [2,3,4,5];

// dbug($numbers);

// $i=0;

// foreach($numbers as &$number):
//     $number = $number * 3;
//     echo "$i : $number<br>";
//     $i++;
// endforeach;

// dbug($numbers);

$user = [
    'name' => 'Jane Doe',
    'email' => 'janedoe@gmail.com',
    'skills' => ['php','javascript','python']
];

foreach($user as $key => $value):
    echo "$key : $value";
    // test si value est un tableau (is_array)
    // si oui transformer le tableau en chaine de cacatere (implode)
    // afficher cette chaine de cacatere sous de tableau (json_encode)
endforeach;

// Afficher le tableau des skills