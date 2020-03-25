<?php

include_once 'User.class.php';
include_once 'UserInterface.php';
include_once 'UserRepository.php';

class UserController
{
    private $users;

    public function __construct(UserInterface $users)
    {
        $this->users = $users;
    }

    public function addUser($params)
    {
        $user = new User($params['username'], $params['password']);
        $this->users->add($user);
    }
}