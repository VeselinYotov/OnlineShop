<?php

require_once('Core/BaseObject/BaseObject.class.php');
require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/BaseObject/ObjectRepository.php');

/**
 * ObjectController abstract class
 * 
 * Template for logic used in handling requests for Entities in Module
 * Controls Children of Core/BaseObject/BaseObject  
 */
abstract class ObjectController
{
    /**
     * Holds inherited objects
     * 
     * @var array
     */
    private $objects;

    /**
     * Constructor
     * 
     * @param array of BaseObject Children
     */
    public function __construct(ObjectInterface $objects)
    {
        $this->objects = $objects;
    }

    // Creates new instance of Child Object
    abstract public function createОbject($params); 

    // Reades instace of Child Object 
    abstract public function readObject($id);

    // Updates instance of Child Object
    abstract public function updateObject($params);

    //Deletes instance of Child Object
    abstract public function deleteObject($params);
    
}