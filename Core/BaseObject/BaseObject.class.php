<?php

abstract class BaseObject
{
    // Data variable for child classes attributs 
    protected $data = array();

    public function __set( $attributeName, $attributeValue)
    {
            $this->data[$attributeName] = $attributeValue;
    }
    public function __get($attributeName)
    {
            return $this->data[$attributeName];
    }
}