<?php

abstract class BaseObject
{
    // Data variable for child classes attributs 
    protected $data = array();

    //  Params is an associative array
    public function __construct($params)
    {
        for($i = 0 ; $i < sizeof($params); $i++)
        {
            $this->data[$params[$i]] = $params[$attributeValue];
        }
    }
    public function __set($attributeValue , $attributeName)
    {
            $this->data[$attributeName] = $attributeValue;
    }
    public function __get($attributeName)
    {
            return $this->data[$attributeName];
    }
}