<?php
class Reloj{

    private $horas;
    private $minutos;
    private $segundos;
    private $incremento;
    private $puesta_a_cero;

    public function __construct($horas, $minutos, $segundos, $incremento, $puesta_a_cero){
        $this -> horas = $horas;
        $this -> minutos = $minutos;
        $this -> segundos = $segundos;
        $this -> incrimento = $incremento;
        $this -> puesta_a_cero = $puesta_a_cero;
    }

    public function getHoras(){
        return $this -> horas;
    }
    public function getMinutos(){
        return $this -> minutos;
    }
    public function getSegundos(){
        return $this -> segundos;
    }
    public function getIncremento(){
        return $this -> incremento;
    }

    public function getPuestaACero()
    {
        return $this->puesta_a_cero;
    }

    /**
     * Contador de tiempo
     * @param unknow $horas,$minutos,$segundos
     * @return String
    */
    public function contadorTiempo($horas,$minutos,$segundos){
        $tiempo = "00:00:00";
        for ($i=0; $i <= $segundos ; $i++) { 
            $tiempo = "00:00:".$i;
            for ($j=0; $j <= $minutos ; $j++) {
                $tiempo = "00:".$j . $i;
                for ($k=0; $k <= $horas ; $k++) {
                    $tiempo = "hs $k:min $j:seg $i";
                }
            }
        }

        return $tiempo;
    }

    public function __toString()
    {
        return "Tiempo: ".$this->contadorTiempo;
    }
}