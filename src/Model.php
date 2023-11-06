<?php
require 'Db.php';

class Model extends DB_con
{
    public $db;

    public function __construct()
		{
			$this->db=new DB_Con();
		}

    public function getUserAll()
    {
        $requete = 'SELECT * FROM user';
        return $this->db->exec($requete); 
    }
}