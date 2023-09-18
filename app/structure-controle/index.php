<?php
/* if/else/elseif

>
<
>=
<=
==
===
!=
!==

*/

// $age = 10;
// if($age >= 18) {
//     echo "Vous avez le droit de voter.";
// } else {
//     echo "Vous n'avez pas le droit de voter !";
// }

$heure = 06;
// Afficher "On est le matin" lorsque l'heure est inferieur à 12h00 
//et "On est le soir" lorsque l'heure est supérieur à 18h00

if ($heure <= 12) {
    echo "On est le matin.";
} elseif ($heure >= 18) {
    echo "On est le soir.";
}
