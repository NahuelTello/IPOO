<?php
class Reloj{
    //ATRIBUTOS
    private $horas;
    private $minutos;
    private $segundos;

    //METODOS
    public function __construct($horas,$minutos,$segundos)
    {
        $this->horas=$horas;
        $this->minutos=$minutos;
        $this->segundos=$segundos;
    }

    //METODOS GETTERS Y SETTERS

    public function getHora(){
        return $this->horas;
    }

    public function getMinutos()
    {
        return $this->minutos;
    }

    public function getSegundos()
    {
        return $this->segundos;
    }

    public function setHora($h){
        $this->horas = $h;
    }

    public function setMinutos($m){
        $this->minutos=$m;
    }

    public function setSegundos($s){
        $this->segundos = $s;
    }

    public function puesta_a_cero(){
        $this->setHora(0);
        $this->setMinutos(0);
        $this->setSegundos(0);
    }

    /**
     * Funcion que incrementa los segundos, minutos y horas. Cuando el cronometro llegue a 23:59:59 deberá pasar a 
     * 00:00:00
    */
    public function incrementar(){
        $hora_int = $this->getHora();
        $minutos_int = $this->getMinutos();
        $segundos_int = $this->getSegundos();

        if ($segundos_int < 59) { //Si los segundos son menores a 59 seg
            $segundos_int++;
            $this->setSegundos($segundos_int);
        } else {
            $this->setSegundos(0);
            $minutos_int++;
            if ($minutos_int < 59) { //Si los minutos son menores a 59 min
                $this->setMinutos($minutos_int);
            } else {
                $this->setMinutos(0);
                $hora_int++;
                if($hora_int<23){
                    $this->setHora($hora_int);
                }else {
                    $this->setHora(0);
                }
            }
        }
    }

    public function __toString()
    {
        return "{$this->getHora()}:{$this->getMinutos()}:{$this->getSegundos()}" ;
    }
}