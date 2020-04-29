<?php

require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/DatabaseConnection.php');
require_once('Core/BaseObject/ObjectRepository.php');

/**
 * UserRepository
 * 
 * @description - Class used for the database logic for the User entity
 */
class UserRepository extends ObjectRepository 
{
    protected $objectTableName = "user";
}