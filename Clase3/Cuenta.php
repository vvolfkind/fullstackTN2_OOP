<?php

abstract class Cuenta
{
    protected $cbu;
    protected $balance;
    protected $ultimoMovimiento;

    public function __construct($cbu)
    {
        $this->cbu = $cbu;
    }

    abstract public function debitar($monto, $origen);

    public function acreditar($monto)
    {
        $this->balance = $this->balance + $monto;
        $this->setUltimoMovimiento();
        echo 'Acreditado: ' . $monto . '<br>';
        echo 'Saldo ' . $this->balance . '.';
    }

    private function setUltimoMovimiento()
    {
        $fecha = date('D-M-Y');
        $this->ultimoMovimiento = $fecha;
    }


}
