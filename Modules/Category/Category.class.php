<?php

require_once('Core/BaseObject/BaseObject.class.php');

/**
 * Category class 
 * 
 * @description - Class used for the logic and functionality of the Category entity
 */
class Category extends BaseObject
{
    // Category table attributes
    public $attributes = [
        'parent_id' => "",
        'name' => "",
        'picture_location' => ""
    ];

    // Primary key
    public $primaryKeyName = "id";

    // Table name 
    public $tableName = "category";


}
