<?php

class Feliz extends Estado
{
    public function estimulo_comer()
    {
        echo 'Nada<br>';
        return $this;
    }

    public function estimulo_beber()
    {
        echo '5 beeps<br>';
        return $this;
    }

    public function estimulo_mimos()
    {
        echo 'Nada<br>';
        return $this;
    }

}
