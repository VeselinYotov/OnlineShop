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
    protected $attributes = [];

    /**
     * Primary key for database
     */
    protected $primaryKeyName;

    /**
    * Constructor
    * 
    * @param $attributes is associative array of attributes names and their values
     */
    public function __construct($attr)
    {   

        // $attributes_keys holds attributeNames  
        $attributes_keys = array_keys($attr);

        // $attributes_keys hold attributeValues 
        $attributes_values= array_values($attr);

        // Assigns attributes to $this->data
        for($i = 0 ; $i < sizeof($attributes_keys) ;$i++)
        {
            $this->attributes[$attributes_keys[$i]] = $attributes_values[$i];
        }
    }

    /**
    * Set magic method
    */
    public function __set( $attributeName, $attributeValue)
    {
        $this->$attributes[$attributeName] = $attributeValue;
    }

    /**
    * Set magic method
    */
    public function __get($attributeName)
    {
        echo $attributeName;
        return $this->attributes[$attributeName];
    }

    /**
     * function getAttributes()
     * 
     * @return $data
     */
    public function getAttributes()
    {
        $attr = $this->attributes;

        if(!$attr)
        {
            throw new Exception("No attributes have been passed");
        }

        return $attr;
    }
}