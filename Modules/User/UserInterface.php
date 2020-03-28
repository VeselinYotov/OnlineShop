<?php

require_once('Core/BaseObject/ObjectInterface.php');
require_once('Core/BaseObject/BaseObject.class.php');
require_once('Modules/User/User.class.php');
interface UserInterface extends ObjectInterface
{
    public function create($user);
    public function read($id);
    public function update($user);
    public function delete($user);
}