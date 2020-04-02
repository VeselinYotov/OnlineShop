<?php

include_once 'ObjectInterface.php';
include_once 'Core/DataBaseConnection.php';

abstract class ObjectRepository implements ObjectInterface
{
    private $db;

    public function __construct()
    {
        $params = array();
        $params['driver'] = "mysql";
        $params['host'] = "mysql";
        $params['dbname'] = "mysql";
        $params['username'] = "root";
        $params['password'] = "";
        ;
        
        $this->db = new DatabaseConnection();
    }

    abstract public function create(User $user);
    abstract public function read($id): User;
    abstract public function update(User $user);
    abstract public function remove(User $user);
}