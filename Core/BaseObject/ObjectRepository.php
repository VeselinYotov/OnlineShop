<?php


require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/DatabaseConnection.php');

/**
 * ObjectRepository
 * 
 * Repository for Core\BaseObject\BaseObject
 */
abstract class ObjectRepository implements ObjectInterface
{
    /**
     * Holds instance of Core/DatabaseConnection
     * 
     * @var Core\DatabaseConnection
     */
    protected $db;

    /**
     * Constructor
     */
    public function __construct()
    {

        $params = array();
        $params['driver'] = "mysql";
        $params['host'] = "localhost";
        $params['dbname'] = "OnlineShop";
        $params['username'] = "root";
        $params['password'] = "";
        
        // Creates instance of Core/DatabaseConnection
        $this->db = new DatabaseConnection($params);
        
    }
    /**
     * function create()
     * 
     * holds logic for creating new instance of Core\BaseObject\BaseObject
     * 
     * @param $user Core\BaseObject\BaseObject
     */
    abstract public function create($user);

    /**
     * function read()
     * 
     * holds logic for reading new instance of Core\BaseObject\BaseObject
     * 
     * @param $id ID of Core\BaseObject\BaseObject
     */
    abstract public function read($id);

    /**
     * function update()
     * 
     * holds logic for updating new instance of Core\BaseObject\BaseObject
     * 
     * @param $user Core\BaseObject\BaseObject
     */
    abstract public function update($user);

    /**
     * function delete()
     * 
     * holds logic for deleting new instance of Core\BaseObject\BaseObject
     * 
     * @param $user Core\BaseObject\BaseObject
     */
    abstract public function delete($user);
}