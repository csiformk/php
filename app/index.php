<?php

//phpinfo();

/* 
Commentaires
sur 
plusieurs 
lignes
*/

//echo "Test php";
?>

<!-- <h1>php</h1> -->

<?php

// Variables
 $variable = 'Une variable';
 $Variable = 'Une autre variable';

//  echo $variable;
//  echo '<br>';
//  echo $Variable;

//$nb = '5';
//$nb = 5;
//$nb = (string) '5';
//$nb = (int) '5';
//$nb = (float) '5.6';
// $nb = (bool) 'true';

//echo $nb;
//printf($nb);
// var_dump($nb);

// $camelCase = 'une variable en camel case';
// $snake_case = 'une variable en snake case';
// //$kebab-case = 'une variable en kebab case';
// // kebab case pas valid en php
// $PascalCase = 'une variable en pascale case';

// $fruit1 = 'pomme';
// $fruit2 = 'banane';

// echo "$fruit1" . " " . "$fruit2";
// echo "<p>$fruit1" . " " . "$fruit2</p>";
// echo "<p>$fruit1" . "<br> " . "$fruit2</p>";

// $fruit1 = 'pomme';
// $fruit1 = 'banane';
// $fruit1 = 'kiwi';

// echo $fruit1;

// $resultat = '';
// $resultat .= '<h1>';
// $resultat .= 'Le fruit choisi est :';
// $resultat .= '</h1>';
// $resultat .= ' la banane';

// echo $resultat;

// $titre = "Les fruits";
// $texte ="Lorem ipsum dolor sit, amet consectetur";
?>

<!-- <h2><?php echo $titre ?></h2>
<h2><?//= $titre ?></h2>

<p>
    <?//= $texte ?>;
</p> -->

<?php

// $data1 = "Hello";
// $data2 = "planete";
// $data3 = "Mars";
// $data4 = "les terriens";

// Afficher la phrase suivante dans un paragraphe
// Hello, les terriens.Je viens de la planete Mars.

// echo "<p>$data1" . ", " . $data4 . ".Je viens de la " . $data2 . " " . $data3 . ".</p>";

// $html = '';
// $html .= '<p>';
// $html .= $data1;
// $html .= ", ";
// $html .= $data4;
// $html .= ".Je viens de la ";
// $html .= $data2;
// $html .= " ";
// $html .= $data3;
// $html .= '</p>';

// echo $html;

// $tableau = ['groupe scolaire', 34 , 5.78 , false , [1,2,3]];

// $client = 'Jane Done';
// $formation = 'Architecte';

// echo '$client suit une formation de $formation';

//echo "test";

//die();

// echo "<pre>";
// print_r($tableau);
// var_dump($tableau);
// echo "</pre>";

// Constantes

// define('USER', 'Jon Doe');
// echo USER;

// define('TABLEAU', ['client', 4, true, 4.8]);

// var_dump(TABLEAU);

// Varialbes superglobales

// var_dump($GLOBALS);
// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

// Operateur

$x = 4;
$y = 2;
$z = 5;

/*
+
-
*
/
**
%
*/

// $calcul = $x + $y;
// $calcul = $x - $y;
// $calcul = $x * $y;
// $calcul = $x / $y;
// $calcul = $x ** $y;
// $calcul = $x % $y;
// $calcul = ($x + $z) * $y;

// echo $calcul;

// $a = 5;
// $b = 7;

// $a += 6; // $a = $a + 6;
// $a -= 6; // $a = $a - 6;
// $a *= 6; // $a = $a * 6;
// $a /= 6; // $a = $a / 6;
// $a **= 6; // $a = $a ** 6;
// $a %= 6; // $a = $a % 6;

// echo $a;

// Creer 2 variables prixht et tva
// Afficher le calcul du prix ttc
// Affichage du prix ttc : Le prix TTC est de xxx €

// $prixht = 34;
// $tva = 10;

// // $prixttc = $prixht + ($tva * $prixht) /100;
// $prixht += ($tva * $prixht) /100;

// echo "Le prix TTC est de $prixht €.";

// Calculer l'âge d'une personne en fonction de son année de naissance
// En utilisant la fonction date
// $anneeDeNaissance = 1990;
// $anneeEnCours = date("Y");
// $age = $anneeEnCours - $anneeDeNaissance;
// echo "$age";

$i = 10;
$i++; // $i = $i + 1 | $i += 1
$i--; // $i = $i - 1 | $i -= 1