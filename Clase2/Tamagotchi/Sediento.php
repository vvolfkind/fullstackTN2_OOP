<?php

class Sediento extends Estado
{
    public function estimulo_comer()
    {
        echo 'Nada<br>';
        return $this;
    }

    public function estimulo_beber()
    {
        echo 'Feliz!';
        return new Feliz;
    }

    public function estimulo_mimos()
    {
        echo 'Nada<br>';
        return $this;

    }

}
