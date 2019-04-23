<?php

class Classic extends Cuenta
{
    private $origenes = [
        'Banelco' => 1.05,
        'Link' => 1.1,
        'Caja' => 1
    ];

    public function __construct($cbu)
    {
        parent::__construct($cbu);
    }

    public function debitar($monto, $origen)
    {
        $error = "No hay fondos suficientes";
        $origenes = $this->origenes;
        if(!array_key_exists($origen, $origenes)) {
            return $error;
        }

        if(!$this->balance < $monto) {
            foreach($origenes as $key => $value) {
                if($origen == $key) {
                    $this->balance = $this->balance - $monto * $value;
                }
            }
            return $this->balance;
        }

        return $error;

    }
}

