<?php
//https://www.php.net/manual/en/pdo.connections.php

class Database
{
    public $connexion;
    public $statement;

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
        $this->statement = $this->connexion->prepare($query);
        $this->statement->execute($param);
        return $this;
    }

    public function find() 
    {
        return $this->statement->fetch();
    }

    public function findAll() 
    {
        return $this->statement->fetchAll();
    }

    public function getAllUsers() 
    {
        return $this->query('SELECT * FROM user')->findAll();
    }

    public function getAllArticles() 
    {
        return $this->query('SELECT * 
        FROM post p
        INNER JOIN user u 
        ON p.user_id = u.id
        ORDER BY p.user_id DESC')->findAll();
    }


}

