<?php

include_once 'UserInterface.php';
include_once 'Modules/DataBaseConnection.php';

class UserRepository implements UserInterface
{
    private $db;

    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function add(User $user)
    {
        // How to make it with pdo so i dont use temp variables for User attributes ?

        $username     = $user->getUsername();
        $password     = $user->getPassword();
        $email        = $user->getEmail();
        $first_name   = $user->getFirstName();
        $last_name    = $user->getLastName();
        $phone_number = $user->getPhoneNumber();
        $city         = $user->getCity();
        $address      = $user->getAddress();
        $postal_code  = $user->getPostalCode();
        
 
        $query = $this->db->connection->prepare("INSERT INTO user (Username, Password, Email, First_Name, Last_Name, Phone_Number, City, Address, Postal_Code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->bind_param("sssssssss",$username,$password,$email,$first_name,$last_name,$phone_number,$city,$address,$postal_code);
        $query->execute();
        if ($query->errno) {
            die('Unable to process MySQL query (check your params) - ' . $query->error);
           }
        $query = null;
    }

    public function findByID($id): User
    {
    }

    public function update(User $user)
    {
        
    }

    public function remove(User $user)
    {
    }
}