<?php

class User{

    private $username;
    private $password;
    private $email;
    private $first_name;
    private $last_name;
    private $phone_number;
    private $city;
    private $address;
    private $postal_code;

    public function __construct($username , $password)
    {
        $this->setUsername($username);
        $this->setPassword($password);
    }

    // Getters
    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getFullName()
    {
        if (isset($this->first_name) && isset($this->last_name)) {
            return $this->getFirstName() . ' ' . $this->getLastName();
        } else {
            return null;
        }
    }

    public function getPhoneNumber()
    {
        return $this->phone_number;;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPostalCode()
    {
        return $this->postal_code;
    }

    // Setters

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function setPhoneNumber()
    {
        return $this->phone_number;;
    }

    public function setCity()
    {
        return $this->city;
    }

    public function setAddress()
    {
        return $this->address;
    }

    public function setPostalCode()
    {
        return $this->postal_code;
    }

    public function changePassword($oldPassword, $newPassword)
    {
        // Where to put logic for changing password? 
        $this->password = $newPassword;
    }
}
