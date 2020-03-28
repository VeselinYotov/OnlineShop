<?php 


// CRUD interface

interface ObjectInterface 
{
    public function create(BaseObject $object);
    public function read($id): BaseObject;
    public function update(BaseObject $object);
    public function delete(BaseObject $object);
}