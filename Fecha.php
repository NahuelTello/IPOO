<?php
//DESCRIPCION DEL OBJETO
class Fecha{

    //ATRIBUTOS O CARACTERISTICAS
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
    
    public function setDia($n_dia){
        $this->dia = $n_dia;
    }

    public function setMes($n_mes){
        $this->mes = $n_mes;
    }

    public function setAnio($n_anio){
        $this->anio = $n_anio;
    }

    //Retorna si el anio ingresado es bisiesto o no
    public function esBisiesto(){
        $bisiesto = (($this->getAnio() % 4 == 0 && $this->getAnio() % 100 != 0) || $this->getAnio() % 400 == 0 );
        return $bisiesto;
    }

    public function incrementa_un_dia(){
        
    }
     
    //incrementa una x cantidad de dias y retorna una nueva fecha
    /**
     * @param number
     * @return String
    */
    public function incrementar($fecha, $cantDias)
    {
    }

}