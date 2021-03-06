<?php

require_once('Core/BaseObject/BaseObject.class.php');

/**
 * User class 
 * 
 * @description - Class used for the logic and functionality of the User entity
 */
class User extends BaseObject
{
    // User table attributes

    public $attributes = [
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

}
