<?php

require_once('Core/BaseObject/BaseObject.class.php');

/**
 * Order class 
 * 
 * @description - Class used for the logic and functionality of the Order entity
 */
class Order extends BaseObject
{

    // Order table attributes
    public $attributes = [
        'user_id' => "",
        'created_at' => "",
        'first_name' => "",
        'last_name' => "",
        'phone_number' => "",
        'city' => "",
        'address' => "",
        'postal_code' => "",
        'order_sum' => ""
    ];

    // Primary key
    public $primaryKeyName = "id";

}
