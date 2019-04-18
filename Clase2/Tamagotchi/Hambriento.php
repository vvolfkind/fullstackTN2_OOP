<?php
/**
 * Esta clase es una clase hija de Estado, hereda de Estado, EXTIENDE A Estado
 * 
 * Como definimos antes, si o si debemos implementar los tres metodos
 * abstractos que definimos en la clase Padre.
 * 
 */
class Hambriento extends Estado
{
    public function estimulo_comer()
    {
        // Recordemos que hace el Tamagotchi cuando decide comer():
        // $this->estado = $this->estado->estimulo_comer();
        //      1                       2
        // 1 - Se refiere al estado interno del Tamagotchi. El signo = va
        // a hacer que se envie un mensaje al Estado, que le diga "che, voy
        // a comer". 
        // 2 - El estado interno va a recibir el mensaje y va a decir "bueno,
        // cuando me decis "comer", yo puedo devolver un estado nuevo, o nada".
        // Si no devuelve nada, mantiene el estado, por ende devolveria $this, 
        // que no es otra cosa que el estado actual.

        // Pero como el Tamagotchi tiene un estado Hambriento, si le das de 
        // comer no deberia devolver $this, osea no deberia mantener el estado
        // Hambriento, sino que devuelve un estado puntual y nuevo que es Feliz

        echo 'Feliz!';
        // Si vemos esta linea de nuevo
        // $this->estado = $this->estado->estimulo_comer();
        // Vemos que lo que sea que devuelva el estado, va a continuar siendo un
        // Estado, y segun la consigna si el Estado es Hambriento, y le mandamos
        // el mensaje "comer", este pasaria a ser un nuevo estado, new Feliz.
        return new Feliz;
    }

    public function estimulo_beber()
    {
        // El estado es Hambriento y le doy de beber?
        echo 'Nada<br>';
        // Respondo al mensaje beber con el mismo estado ($this), ya que no cambia
        return $this;
    }

    public function estimulo_mimos()
    {
        echo 'Nada<br>';
        return $this;
    }

    }
