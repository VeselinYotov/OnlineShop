<?php

require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/DatabaseConnection.php');
require_once('Core/BaseObject/ObjectRepository.php');

/**
 * CategoryRepository
 * 
 * @description - Class used for the database logic for the Category entity
 */
class CategoryRepository extends ObjectRepository 
{
    protected $objectTableName = "category";
}