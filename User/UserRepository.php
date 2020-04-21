<?php


require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/DatabaseConnection.php');
require_once('Core/BaseObject/ObjectRepository.php');
/**
 * ObjectRepository
 * 
 * Repository for Core\BaseObject\BaseObject
 */
class UserRepository extends ObjectRepository 
{
    protected $objectTableName = "user";
}