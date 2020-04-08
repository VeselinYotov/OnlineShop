<?php


require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/DatabaseConnection.php');

/**
 * ObjectRepository
 * 
 * Repository for Core\BaseObject\BaseObject
 */
class ObjectRepository implements ObjectInterface
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
        $params['dbname'] = "onlineshop";
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
        $query = $this->db->DatabaseConnection->exec('INSERT INTO ' . $entity->tableName . " VALUES ('id','" . implode("','" , $entityKeyValues) . "')");
        if(!$query)
        {
            var_dump($this->db->DatabaseConnection->errorInfo());
        }
        // Clears query
        $query = "";
    }

    /**
     * function findById()
     * 
     * holds logic for reading new instance of Core\BaseObject\BaseObject
     * 
     * @param $attributes assosiative array [ attributes[{ENTITY} tableName] , attributes[{ENTITY} primaryKeyName] ] 
     */
    public function findById($attributes)
    {
        // Database prepare insert 
        $query = $this->db->DatabaseConnection->query("SELECT * FROM ". $attributes['tableName'] . " WHERE id = " . $attributes['primaryKeyName']); 

        //Fetches results from query
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
    public function update($attributes)
    {
        // $entityKeyNames holds entity attrbute names  
        $attributesKeyNames = array_keys($attributes->getAttributes());

        // $entityKeyValues holds entity attrbute values 
        $attributesKeyValues = array_values($attributes->getAttributes());

        // Database prepare update
        // No prepare way?
        $query = $this->db->DatabaseConnection->prepare("UPDATE " . "'" . $attributes->tableName . "'" . "SET(" . implode("=?," , $attributesKeyNames) ."=?') WHERE id = " . $attributes->id);
        $query = $this->db->DatabaseConnection->exec([$attributesKeyValues]); 
   
    }

    /**
     * function delete()
     * 
     * holds logic for deleting new instance of Core\BaseObject\BaseObject
     * 
     * @param $user Core\BaseObject\BaseObject
     */
    public function delete($user)
    {

    }
}