<?php
/* Diseñar e implementar la clase Fecha. La clase deberá disponer de los atributos mínimos y necesarios
para almacenar el día, el mes y el año, además de métodos que devuelvan un String con la fecha en forma
abreviada (16/02/2000) y extendida (16 de febrero de 2000) . Implementar una función incremento, que
reciba como parámetros un entero y una fecha, que retorne una nueva fecha, resultado de incrementar la
fecha recibida por parámetro en el numero de días definido por el parámetro entero.
Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, salvo que lo sean de
cuatrocientos, en cuyo caso si son bisiestos.
Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia. */
class Fecha{

    //ATRIBUTOS
    private $dia;
    private $mes;
    private $anio;

    //METODOS
    public function __construct($dia,$mes,$anio)
    {
        $this->dia=$dia;
        $this->mes=$mes;
        $this->anio=$anio;
    }

    public function getDia(){
        return $this->dia;
    }

    public function getMes(){
        return $this->mes;
    }

    public function getAnio(){
        return $this->anio;
    }

    /**
     * @param int $diaSet
     * @return int
     */
    public function setDia($diaSet){
        $this->dia = $diaSet;
    }

    /**
     * @param int $mesSet
     * @return int
     */
    public function setMes($mesSet)
    {
        $this->mes = $mesSet;
    }

    /**
     * @param int $anioSet
     * @return int
     */
    public function setAnio($anioSet)
    {
        $this->anio = $anioSet;
    }


    //public function fecha


/* Implementar una función incremento, que reciba como parámetros un entero y una fecha, 
que retorne una nueva fecha, resultado de incrementar la fecha recibida por parámetro en el numero de días definido por el parámetro entero. */
    /**
     * Incrementa los dias segun los ingresados y devuelve una nueva fecha
     *  fecha $dia/$mes/$anio
     * @param int $cantDias 
     * @return String
    */
    public function incrementar_un_dia($cantDias){

        $dia_int = $this->getDia(); //Objeto dia
        $mes_int = $this->getMes(); //Objeto mes
        $anio_int = $this->getAnio(); //Objeto año
        
        for ($i=1; $i <= $cantDias ; $i++) {
            $dia_int = $dia_int + $i;
            $nuevo_dia = $this->setDia($dia_int);
        }
        $fechaNueva = $this->fecha = "{$nuevo_dia}/{$mes_int}/{$anio_int}" ;
        return $fechaNueva;
    }   


    public function __toString()
    {
        return "{$this->getDia()}/{$this->getMes()}/{$this->getAnio()}";
    }
    
}