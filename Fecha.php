<?php
//DESCRIPCION DEL OBJETO
class Fecha{

    //ATRIBUTOS O CARACTERISTICAS
    private $dia;
    private $mes;
    private $anio;
    private $MesesStr = array(
        1 => ['nombre' => 'enero', 'cantDias' => 31],
        2 => ['nombre' => 'febrero', 'cantDias' => 28],
        3 => ['nombre' => 'marzo', 'cantDias' => 31],
        4 => ['nombre' => 'abril', 'cantDias' => 30],
        5 => ['nombre' => 'mayo', 'cantDias' => 31],
        6 => ['nombre' => 'junio', 'cantDias' => 30],
        7 => ['nombre' => 'julio', 'cantDias' => 31],
        8 => ['nombre' => 'agosto', 'cantDias' => 31],
        9 => ['nombre' => 'septiembre', 'cantDias' => 30],
        10 => ['nombre' => 'octubre', 'cantDias' => 31],
        11 => ['nombre' => 'noviembre', 'cantDias' => 30],
        12 => ['nombre' => 'diciembre', 'cantDias' => 31]
    );
    

    //METODOS

    public function __construct($dia_int,$mes_int,$anio_int)
    {
        $this->diaInt = $dia_int;
        $this->mesInt = $mes_int;
        $this->anioInt = $anio_int;
    }

    public function getDia(){
        return $this->diaInt;
    }

    public function setDia($dia){
        $this->diaInt = $dia;
    }

    public function getMes(){
        return $this->mesInt;
    }

    public function setMes($mes){
        $this->mesInt = $mes;
    }

    public function getAnio(){
        return $this->anioInt;
    }

    public function setAnio($anio){
        $this->anioInt = $anio;
    }


    public function incremento_dias(){
        
    }

}