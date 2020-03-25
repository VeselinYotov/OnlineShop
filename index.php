<?php

include_once 'Modules/User/UserRepository.php';
include_once 'Modules/User/UserController.php';

$users = new UserRepository();

$userController = new UserController($users);

// Create new User
$params = array(
    'username' => 'user3',
    'password' => 'password',
);

$userController->addUser($params);
