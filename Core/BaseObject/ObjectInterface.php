<?php 


// CRUD interface

interface ObjectInterface 
{
    public function create($object);
    public function read($id);
    public function update($object);
    public function delete($object);
}