<?php


require_once('Core/BaseObject/ObjectController.php');

include_once 'User.class.php';
include_once 'UserInterface.php';
include_once 'UserRepository.php';

class UserController extends ObjectController
{
    private $users;

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function createОbject($params)
    {
        $user = new User($params['username'], $params['password']);
        $this->users->create($user);
    }

    public function readObject($params)
    {

    }
    public function updateObject($params)
    {

    }
    public function deleteObject($params)
    {
        
    }
}