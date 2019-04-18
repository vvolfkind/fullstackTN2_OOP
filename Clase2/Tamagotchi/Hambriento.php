<?php

class Hambriento extends Estado
{
  public function estimulo_comer()
  {
    echo "Feliz!";
    return new Feliz;
  }

  public function estimulo_beber()
  {
    echo "Nada<br>";
    return $this;
  }

  public function estimulo_mimos()
  {
    echo "Nada<br>";
  }

}
