<?php

require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/DatabaseConnection.php');
require_once('Core/BaseObject/ObjectRepository.php');

/**
 * ProductRepository
 * 
 * @description - Class used for the database logic for the Product entity
 */

class ProductRepository extends ObjectRepository 
{
    protected $objectTableName = "product";
}