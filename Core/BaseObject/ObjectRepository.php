<?php

include_once 'ObjectInterface.php';
include_once 'Core/DataBaseConnection.php';

abstract class ObjectRepository implements ObjectInterface
{
    protected $db;

    public function __construct()
    {

        $params = array();
        $params['driver'] = "mysql";
        $params['host'] = "localhost";
        $params['dbname'] = "OnlineShop";
        $params['username'] = "root";
        $params['password'] = "";
        
        
        $this->db = new DatabaseConnection($params);
        
    }

    abstract public function create($user);
    abstract public function read($id);
    abstract public function update($user);
    abstract public function delete($user);
}