<?php

class Payer{

    public $name;
    public $email;
    public $phone;
    public $identification;
    public $address;

    function __construct($name, $email, $phone, $identification, $address){
        $this->name             = $name;
        $this->email            = $email;
        $this->phone            = $phone;
        $this->identification   = $identification;
        $this->address          = $address;
    
    }

}