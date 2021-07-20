<?php
class BackUrls{

    public $success;
    public $pending;
    public $failure;

    function __construct($success, $pending, $failure){
        $this->success = $success;
        $this->pending = $pending;
        $this->failure = $failure;  
    }

}