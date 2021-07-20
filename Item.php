<?php
class Item{

    function __construct($id, $title, $description, $picture_url, $quantity, $unit_price) {
        $this->id 			= $id;
        $this->title 		= $title;
        $this->description 	= $description;
        $this->picture_url 	= $picture_url;
        $this->quantity 	= $quantity;
        $this->unit_price 	= $unit_price;
    
    }

    public $id;
    public $title;
    public $description;
    public $picture_url;
    public $quantity;
    public $unit_price;

}