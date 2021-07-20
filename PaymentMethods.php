<?php
class PaymentMethods{
    public $excluded_payment_methods;
    public $installments;

    function __construct($installments){
      $this->installments = $installments;
    }

    public function addExcludedPaymentMethod($PaymentMethod){
        $this->excluded_payment_methods[] = $PaymentMethod;
    }
      
}