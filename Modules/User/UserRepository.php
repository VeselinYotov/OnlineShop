<?php

include_once 'UserInterface.php';
require_once('Core/BaseObject/ObjectRepository.php');

class UserRepository extends ObjectRepository
{
    public function create($user)
    {   
        
        $query = $this->db->DatabaseConnection->prepare("INSERT INTO user (Username, Password, Email, First_Name, Last_Name, Phone_Number, City, Address, Postal_Code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->execute(
            [$user->username,
            $user->password,
            "",
            "",
            "",
            "",
            "",
            "",
            ""
            ]);
        $query = null;
    }

    public function read($id)
    {
        $query = $this->db->DatabaseConnection->prepare("SELECT * FROM user WHERE ID = ? ");
        $query->execute([$id]);
        $result = $query->fetch();
        return $result;
        $query = null;
    }
    
    // Coming soon
    public function update($user)
    { 
    }

    // Coming soon
    public function delete($user)
    {
    }
}