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

    abstract public function acreditar($monto);

    protected function setUltimoMovimiento()
    {
        $fecha = date('D-M-Y');
        $this->ultimoMovimiento = $fecha;
    }

}
