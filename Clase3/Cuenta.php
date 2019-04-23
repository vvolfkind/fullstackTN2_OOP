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
       // $this->setUltimoMovimiento();
        $this->ultimoMovimiento = date("F j, Y, g:i a");
        echo 'Acreditado: ' . $monto . '<br>';
        echo 'Saldo ' . $this->balance . '.';
    }

    private function setUltimoMovimiento()
    {
        $fecha = date("F j, Y, g:i a");
        $this->ultimoMovimiento = $fecha;
    }



}
