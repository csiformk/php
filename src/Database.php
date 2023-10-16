<?php
//https://www.php.net/manual/en/pdo.connections.php

class Database
{
    public $connexion;

    public function __construct()
    {
        try {
            $this->connexion = new PDO('mysql:host=mariadb;dbname=blog',
             'root',
             'root',
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
        } catch (PDOException $e) {
            exit('Erreur de connexion à la base de donnée :' . $e);
        }
    }

    public function query($query, $param = [])
    {
        $statement = $this->connexion->prepare($query);
        $statement->execute($param);
        return $statement;
    }
}

