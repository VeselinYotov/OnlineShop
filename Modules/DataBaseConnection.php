<?php

//TO DO : make it pdo ( see UserRepository )

class DataBase{

    public $connection;

    public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = 'onlineshop') 
    {
		$this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($this->connection->connect_error) 
        {
			die('Failed to connect to MySQL - ' . $this->connection->connect_error);
		}
    }
}