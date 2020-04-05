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
    public function create($entity)
    {
        // $entityKeyNames holds entity attrbute names  
        $entityKeyNames = array_keys($entity->getAttributes());

        // $entityKeyValues holds entity attrbute values 
        $entityKeyValues = array_values($entity->getAttributes());

        // Database inser prepare 
        echo "INSERT INTO " . "'" . $entity->tableName . "'" . " (" . implode("," , $entityKeyNames) ."') VALUES (" . implode("," , $entityKeyValues) . ")";
        $query = $this->db->DatabaseConnection->exec("INSERT INTO " . "'" . $entity->tableName . "'" . " (" . implode("," , $entityKeyNames) ."') VALUES (" . implode("," , $entityKeyValues) . ")"); 

        // Clears query
        $query = "";
    }

    /**
     * function read()
     * 
     * holds logic for reading new instance of Core\BaseObject\BaseObject
     * 
     * @param $id id of Core\BaseObject\BaseObject
     */
    public function read($entity)
    {
        // Database inser prepare
        echo "SELECT * FROM " . $entity->tableName . "WHERE ID = " . $entity->id;
        $query = $this->db->DatabaseConnection->execute("SELECT * FROM " . $entity->tableName . "WHERE ID = " . $entity->id); 
        
        // Fetches results from query
        $result = $query->fetch();

        // Returs array of results
        return $result;

        //Clears query
        $query = "";
    }

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