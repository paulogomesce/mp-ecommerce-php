<?php
class Identification{
    
    public $type;
    public $number;

    function __construct($number, $type){
        $this->number = $number;
        $this->type = $type;
    }

}