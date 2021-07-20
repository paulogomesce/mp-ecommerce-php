<?php
class Phone{

    function __construct($area_code, $number){
        $this->area_code = $area_code;
        $this->number    = $number;    
    }

    public $area_code;
    public $number;

}