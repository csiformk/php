<?php 
require '../fonctions/index.php';
require '../data/villes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcours de tableaux</title>
</head>
<body>
    <?php
        // $jsonListEmployees = file_get_contents('../data/employees.json');
        // $jsonListEmployeesArray = json_decode($jsonListEmployees,true);
        // //  dd($jsonListEmployeesArray);
  
        // foreach($jsonListEmployeesArray['data'] as $key => $val):
        //     // echo "<ul>";
        //     // echo '<li>' . $jsonListEmployeesArray['data'][$key]['employee_name'] . '</li>';
        //     // echo '<li>' . $jsonListEmployeesArray['data'][$key]['employee_salary'] . '</li>';
        //     // echo '<li>' . $jsonListEmployeesArray['data'][$key]['employee_age'] . '</li>';
        //     // echo "</ul>";
        //     echo "<ul>";
        //     echo '<li>' . $val['employee_name'] . '</li>';
        //     echo '<li>' . $val['employee_salary'] . '</li>';
        //     echo '<li>' . $val['employee_age'] . '</li>';
        //     echo "</ul>";
        // endforeach;
        // dd($villes);

        function filterByName($villes,$nom)
        {
            $filterVilles = [];
            foreach ($villes as $ville) {
                if ($ville['nom'] === $nom):
                    $filterVilles[] = $ville;
                endif;
            }
            return $filterVilles;
        }
    ?>
    <ul>
        <?php foreach(filterByName($villes, 'Marseille') as $ville): ?>
            <li>
                <a href="<?=$ville['siteWeb']?>"><?=$ville['nom']?></a>
            </li>
            <li>
                Nombre d'habitants : <?=$ville['population']?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>

