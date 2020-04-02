<?php

/**
 * Abstract class BaseObject
 * 
 * Parent for Entities in Module Namespace 
 */
abstract class BaseObject
{

    /**
    * Data variable for inherited class attributes  
    * 
    * @var array 
    */   
    protected $data = [];

    /**
    * Constructor
    * 
    * @param $attributes is associative array of attributes names and their values
    */
    public function __construct($attributes)
    {   

        // $attributes_keys holds attributeNames  
        $attributes_keys = array_keys($attributes);

        // $attributes_keys hold attributeValues 
        $attributes_values= array_values($attributes);

        // Assigns attributes to $this->data
        for($i = 0 ; $i < sizeof($attributes_keys) ;$i++)
        {
            $this->data[$attributes_keys[$i]] = $attributes_values[$i];
        }
    }

    /**
    * Set magic method
    */
    public function __set( $attributeName, $attributeValue)
    {
        $this->data[$attributeName] = $attributeValue;
    }

    /**
    * Set magic method
    */
    public function __get($attributeName)
    {
        return $this->data[$attributeName];
    }
}