<?php

include_once 'Core/BaseObject/BaseObject.class.php';
include_once 'ObjectInterface.php';
include_once 'ObjectRepository.php';


/**
 * ObjectController abstract class
 * Abstract logic for handling requests for Objects 
 */
abstract class ObjectController
{

    private $objects;

    /**
     * function __construct
     * Creates array of objects 
     * @param array of BaseObject Children
     */
    public function __construct(ObjectInterface $objects)
    {
        $this->objects = $objects;
    }

    abstract public function createОbject($params);
    
    // reference for abstraction 
    // $object = new BaseObject($params);
    // $this->objects->add($object);
    
    abstract public function readObject($params);
    abstract public function updateObject($params);
    abstract public function deleteObject($params);
    
}