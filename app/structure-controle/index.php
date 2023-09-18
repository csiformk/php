<?php
/* if/else/elseif
https://www.php.net/manual/fr/control-structures.if.php
https://www.php.net/manual/fr/control-structures.else.php
https://www.php.net/manual/fr/control-structures.elseif.php

>
<
>=
<=
== : comparaison d'égalité en valeur
=== : comparaison d'égalité en valeur et en type
!=
!==

*/

// $age = 10;
// if($age >= 18) {
//     echo "Vous avez le droit de voter.";
// } else {
//     echo "Vous n'avez pas le droit de voter !";
// }

// $heure = 06;
// Afficher "On est le matin" lorsque l'heure est inferieur à 12h00 
//et "On est le soir" lorsque l'heure est supérieur à 18h00

// if ($heure <= 12) {
//     echo "On est le matin.";
// } elseif ($heure >= 18) {
//     echo "On est le soir.";
// }

// $heure = date("H");
// $heure = 16;

// if ($heure <= 12) {
//     echo "On est le matin.";
// } elseif ($heure >= 18) {
//     echo "On est le soir.";
// } else {
//     echo "On est l'apres-midi.";
// }

// $a = '20'; 
// $b = 5;

// if($b != 3) {
//     echo 'La variable $b n\'est pas égale à 3.';
//     // echo "La variable $b n'est pas égale à 3.";
// }

// if($b == '5') {
//     echo "Egalité.";
// }

// if($b === '5') {
//     echo "Egalité.";
// } 

// if($a !== 20) {
//     echo '$a different du nombre 20.';
// }

// $vrai = true;
// $vrai = false;
// $vrai = null;
// if($vrai) {
//     echo "Vrai";
// } else {
//     echo "Faux";
// }
// echo ($vrai) ? "Vrai" : "Faux";

//https://www.php.net/manual/fr/control-structures.else.php#82472

// $votes = 7540;
// $votesPrecedents = 1254;
// ($votes > $votesPrecedents) ? $votes-- : $votes++;

// echo $votes;

//https://www.php.net/manual/fr/control-structures.alternative-syntax.php
// $vrai = false;
// if ($vrai):
//     echo "Vrai";
// else:
//     echo "Faux";
// endif;

//https://www.php.net/manual/fr/control-structures.switch.php

$couleur = 'marron';
// switch ($couleur) {
//     case 'red':
//         echo "Votre couleur favorite est le rouge.";
//         break;
//     case 'blue':
//         echo "Votre couleur favorite est le bleu.";
//         break;
//     case 'green':
//         echo "Votre couleur favorite est le vert.";
//         break;
//     default:
//         echo "Votre couleur favorite est ni le rouge,ni le bleu ni le vert !";
// }

// switch ($couleur):
//     case 'red':
//         echo "Votre couleur favorite est le rouge.";
//         break;
//     case 'blue':
//         echo "Votre couleur favorite est le bleu.";
//         break;
//     case 'green':
//         echo "Votre couleur favorite est le vert.";
//         break;
//     default:
//         echo "Votre couleur favorite est ni le rouge,ni le bleu ni le vert !";
// endswitch;

// $return_value = match ($couleur) {
//     'red' => 'Votre couleur favorite est le rouge.',
//     'blue' => 'Votre couleur favorite est le bleu.',
//     'green' => 'Votre couleur favorite est le vert.',
//     default => 'Votre couleur favorite est ni le rouge,ni le bleu ni le vert !',
// };

// echo $return_value;