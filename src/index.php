<?php
include './fonctions.php';

// class Person {
//     //attributs (variables)
//     public $nom;
//     public $age;

//     //methodes (fonctions)
//     public function courir() {
//         echo $this->nom . ' court lentement !';
//     }
// }

// $person1 = new Person();
// $person1->nom = 'Jon doe';
// $person1->age = 30;
// $person1->courir();

//https://www.php.net/manual/en/pdo.connections.php

try {
    $connexion = new PDO('mysql:host=mariadb;dbname=blog', 'root', 'root');
} catch (PDOException $e) {
    exit('Erreur de connexion à labase de donnée :' . $e);
}

$articles = $connexion->query('SELECT * from post')->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php foreach($articles as $article): ?>
        <li><?=$article['titre']?></li>
    <?php endforeach;?>
</ul>
</body>
</html>

<?php $connexion = null; ?>