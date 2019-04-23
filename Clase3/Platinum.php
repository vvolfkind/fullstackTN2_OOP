<?php

class Platinum extends Cuenta
{
    public function __construct($cbu)
    {
        parent::__construct($cbu);
    }

    public function debitar($monto, $origen)
    {
        if($this->balance >= 5000){
            $this->balance = $this->balance - $monto;
            return $this->balance;
        }

        $this->balance = $this->balance - $monto * 1.05;    
        return $this->balance;
    }
}

