<?php

interface UserInterface
{
    public function add(User $user);
    public function findByID($id): User;
    public function update(User $user);
    public function remove(User $user);
}