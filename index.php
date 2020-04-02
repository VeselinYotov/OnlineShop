<?php

include_once 'Modules/User/UserRepository.php';
include_once 'Modules/User/UserController.php';

$users = new UserRepository();

$userController = new UserController($users);

// Create new User
$params = array(
    'username' => 'user5',
    'password' => 'passwords',
);
$userController->createОbject($params);

$result = $userController->readObject(105);

print_r($result);
