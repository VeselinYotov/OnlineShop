<?php

require_once('Core/BaseObject/BaseObject.class.php');

/**
 * User class 
 * 
 * @description - Class used for the logic and functionality of the User entity
 */
class User extends BaseObject{
    
    public function __construct($username , $password)
    {
        $this->username = $username;
        $this->password = $password;
    }


}
