<?php

require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/DatabaseConnection.php');
require_once('Core/BaseObject/ObjectRepository.php');

/**
 * OrderRepository
 * 
 * @description - Class used for the database logic for the Order entity
 */
class OrderRepository extends ObjectRepository 
{
    protected $objectTableName = "orders";
}