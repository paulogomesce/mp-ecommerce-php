<?php
class Address{

    public $zip_code;
    public $street_name;
    public $street_number;

    function __construct($zip_code, $street_name, $street_number){
        $this->zip_code      = $zip_code;
        $this->street_name   = $street_name;
        $this->street_number = $street_number;
    }

}