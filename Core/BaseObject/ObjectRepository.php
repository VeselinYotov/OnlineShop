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

    protected $objectTableName;

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
     * @param $entity child instance of Core\BaseObject\BaseObject
     */
    public function create($entity)
    {
        // $entityKeyValues holds entity attrbute values 
        $entityKeyValues = array_values($entity->getAttributes());

        // Database inser prepare 
        $query = $this->db->DatabaseConnection->exec('INSERT INTO ' . $this->objectTableName . " VALUES ('id','" . implode("','" , $entityKeyValues) . "')");
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
     * @param $id id of Object  
     */
    public function findById($id)
    {
        // Database prepare insert 
        $query = $this->db->DatabaseConnection->query("SELECT * FROM ". $this->objectTableName . " WHERE id = " . $id); 

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
     * holds logic for updating instance of Core\BaseObject\BaseObject
     * 
     * @param $attributes for updating children of Core\BaseObject\BaseObject
     */
    public function update($attributes)
    {
        echo implode(',',$attributes);
        // $keysWithValues holds keys for PDO::prepare() of type keyName= :keyName
        $keysWithValues = [];

        // $queryData assosiative array with values for PDO::execute() 
        $queryData = [];

        foreach($attributes as $attributeKeyName => $attributeKeyValue)
        {
            // Assigns keys with values to $queryData
            $queryData[$attributeKeyName] = $attributeKeyValue;
            
            // Assigns keys for $keysWithValues
            array_push($keysWithValues,$attributeKeyName."=:".$attributeKeyName);
            
        }
        // Adds entity->id to $queryData
        $queryData['id'] = $attributes['id'];

        // Database prepare update
        $query = $this->db->DatabaseConnection->prepare("UPDATE " . $this->objectTableName . " SET " . implode("," , $keysWithValues) ." WHERE id = :id ");
        
        // Executes $query
        $query->execute($queryData);

    }

    /**
     * function delete()
     * 
     * holds logic for deleting new instance of Core\BaseObject\BaseObject
     * 
     * @param $user Core\BaseObject\BaseObject
     */
    public function delete($id)
    {
        // Sql delete 
        $query =  $this->db->DatabaseConnection->exec("DELETE FROM " . $this->objectTableName . " WHERE id= " . $id);

        // Clears query
        $query = "";
    }
}