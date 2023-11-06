<?php

class DB_Con extends PDO
{
	public function __construct()
	{
		parent::__construct('mysql:dbname=blog;host=mariadb','root','root');
	}
}