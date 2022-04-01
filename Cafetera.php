<?php

class Cafetera{

    //ATRIBUTOS O VARIABLES INSTANCIA DE LA CLASE CAFETERA
    private $capacidadMaxima; //La cantidad maxima de cafe que puede contener la cafetera
    private $cantidadActual; //La cantidad actual de cafe que hay en la cafetera

    //Metodo Constructor del objeto
    public function __construct($max, $actual)
    {
        $this->capacidadMaxima = $max;
        $this->cantidadActual = $actual;
    }

    //Metodos getters y setters

    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }

    public function setCapacidadMaxima($c){
        $this->capacidadMaxima = $c;
    }

    public function getCantidadActual(){
        return $this->cantidadActual;
    }

    public function setCantidadActual($c){
        $this->cantidadActual = $c;
    }

    //Acciones de la clase

    /**
     * La cantidad actual debe ser igual al de la capacidad
     * 
     * @param void
     * @return void
      */
    public function llenarCafetera(){
        $this->cantidadActual = $this->capacidadMaxima;
        //     cantidadActual = 10
    }

    /**
     * Agrega mas cafe segun la cantidad indicada
     * 
     * @param int $cantidad
     * @return void
      */
    public function agregarCafe($cantidad){
        //el agregar cafe solo va agregar la cantidad indicada
        $this->cantidadActual += $cantidad;
        if($this->cantidadActual >= $this->capacidadMaxima){
            $derrame = $this->cantidadActual - $this->capacidadMaxima;
            $respuesta = "La cafetera esta llena, se ha derramado {$derrame}.ml";
        } else {
            $respuesta = "Agregando mas cafe...\n"."Ahora la cafetera esta llena, se han llenado {$this->cantidadActual}.Lts";
        }
        return $respuesta;
    }

    /**
     * Simula la accion de servir una taza con la capacidad indicada. Si la cantidad actual de cafe "no alcanza" para llenar
     * la taza, se sirve lo que quede y se envia un mensaje al consumidor para que sepa porque no se le sirvio una taza completa.
     * 
     * @param int $cantidad
     * @return String
     */

    // Sirve una taza con la capacidad indicada ($cantidad),

    public function servirTaza($cantidad)
    {
        $strResolucion = '';
        if ($this->cantidadActual >= $cantidad) {
            $this->cantidadActual -= $cantidad;
            $strResolucion = "La taza ha sido llenada, restan $this->cantidadActual ml en la cafetera.\n";
        } else {
            $strResolucion = "El contenido de la cafetera no ha podido llenar la taza, solo se han cargado $this->cantidadActual ml.\n";
            $this->vaciarCafetera();
        };
        return $strResolucion;
    }
    
    /**
     * Pone la cantidad de cafe actual en cero
     * 
     * @param void
     * @return void
      */
    public function vaciarCafetera(){
        $this->setCantidadActual(0);
    }

    public function __toString()
    {
        return "Capacidad Máxima de la cafetera: {$this->getCapacidadMaxima()}ml.\nCantidad actual de la cafetera: {$this->getCantidadActual()}ml";
    }
}