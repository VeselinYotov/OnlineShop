<?php


require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/DatabaseConnection.php');
require_once('Core/BaseObject/ObjectRepository.php');
/**
 * CategorytRepository
 * 
 * Repository for Core\BaseObject\BaseObject
 */
class CategoryRepository extends ObjectRepository 
{
    protected $objectTableName = "category";
}