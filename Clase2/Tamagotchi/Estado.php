<?php
/**
 * Estado es una clase abstracta. Una clase Abstracta nos condiciona 
 * a que no vamos a poder instanciar ningun objeto con ella, pero si 
 * con las clases hijas que hereden de ella.
 * 
 */
abstract class Estado
{
    /**
     * Queremos que todos los estados (futuras clases que 
     * hereden de Estado) tengan una propiedad nombre. El "scope", que puede llamarse 
     * VISIBILIDAD, en lugar de ser private, es protected. Si fuera private, 
     * no habria forma de que las clases hijas de Estado puedan acceder a esta
     * propiedad.
     * 
     */
    protected $nombre;

    /**
     * Si bien no vamos a hacer uso del getNombre(), si nos sirve para ir 
     * visualizando dos conceptos.
     * 
     * 1 - Puedo definir metodos en una clase abstracta, y si la visibilidad
     * es public o protected, las clases hijas van a poder usarlos.
     * 2 - Si usaramos getNombre() en una clase hija, podriamos reescribirlo, 
     * y en lugar de devolver nombre, podriamos ponerle "echo 'HOLA JORGE';" 
     * o lo que se nos antoje.
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Aca es donde nosotros como desarrolladores CONDICIONAMOS a que
     * cualquier clase que herede de Estado, tenga que implementar estos
     * metodos. Si no los definimos en alguna clase hija, PHP va a cortar
     * la ejecucion del programa con un error.
     * 
     * Esto lo logramos agregando la palabra reservada ABSTRACT antes
     * de la visibilidad que definamos. Abstract quiere decir "hey, tengo
     * este metodo para que implementes, pero queda en vos definir lo que pase
     * adentro, yo te dejo el nombre (la firma de la funcion)"
     * 
     */
    abstract public function estimulo_comer();

    abstract public function estimulo_beber();

    abstract public function estimulo_mimos();

}
