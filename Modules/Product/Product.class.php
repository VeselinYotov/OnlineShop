<?php

require_once('Core/BaseObject/BaseObject.class.php');

/**
 * Product class 
 * 
 * @description - Class used for the logic and functionality of the Product entity
 */
class Product extends BaseObject
{

    // Product table attributes
    public $attributes = [
        'name' => "",
        'description' => "",
        'created_at' => "",
        'edited_at' => "",
        'category_id' => "",
        'quantitiy' => "",
        'price' => "",
    ];

    // Primary key
    public $primaryKeyName = "id";

}
