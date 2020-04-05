<?php

require_once('Core/BaseObject/BaseObject.class.php');

/**
 * User class 
 * 
 * @description - Class used for the logic and functionality of the User entity
 */
class User extends BaseObject
{

    public $attributes = [
        'username' => "",
        'password' => "",
        'email' => "",
        'first_name' => "",
        'last_name' => "",
        'phone_number' => "",
        'city' => "",
        'address' => "",
        'postal_code' => ""
    ];
    // Primary key
    public $primaryKeyName = "id";

    // Table name 
    public $tableName = "user";


}
