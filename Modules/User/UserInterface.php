<?php

require_once('Core/BaseObject/ObjectInterface.php');

interface UserInterface extends ObjectInterface
{
    public function add(User $user);
    public function findByID($id): User;
    public function update(User $user);
    public function remove(User $user);
}