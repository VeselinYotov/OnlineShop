<?php 

require_once('Core/BaseObject/BaseObject.class.php');

/**
 * ObjectInterface 
 * 
 * Interface for Core\BaseObject\ObjectRepository
 */
interface ObjectInterface 
{
    public function create($object);
    public function read($id);
    public function update($object);
    public function delete($object);
}