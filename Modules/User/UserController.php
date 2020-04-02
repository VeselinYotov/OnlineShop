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

    /**
     *  Creates instance of User 
     *  @param $attributes User attributes needed for creating new User
     *  new User must have (email,password)
     */
    public function createОbject($attributes)
    {
        $user = new User($attributes);
        $this->users->create($user);
    }

    /**
     * Reads instance of User
     * @param $id ID of User
     */
    public function readObject($id)
    {
        return $this->users->read($id);
    }

    public function updateObject($params)
    {

    }
    public function deleteObject($params)
    {
        
    }
}