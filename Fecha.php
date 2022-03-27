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

    public function getDiaFebrero(){
        if($this->esBisiesto()){
            $diasFebrero = 29;
        } else {
            $diasFebrero = 28;
        }
        return $diasFebrero;
    }

    public function fechaExtendida(){
        $coleccionMeses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "obctubre", "noviembre", "diciembre"];
        $diaFebrero = $this->getDiaFebrero();
        if ( ($this->getDia()>30) && ( ($this->getMes() == 1) || ($this->getMes() == 4) || ($this->getMes() == 6) || ($this->getMes() == 9) || ($this->getMes() == 11)  ) ) {
            $fecha_ext = "Esa fecha no es existente!";
        } elseif (($this->getDia() > 31) && (($this->getMes() == 3) || ($this->getMes() == 5) || ($this->getMes() == 7) || ($this->getMes() == 8) || ($this->getMes() == 10) || ($this->getMes() == 12))) {
            $fecha_ext = "Esa fecha no es existente!";
        } elseif (($this->getDia() > $diaFebrero)&&($this->getMes == 2)) {
            $fecha_ext = "Esa fecha no es existente!";
        } else {
            $fecha_ext = "{$this->getDia()} de {$coleccionMeses[$this->getMes() - 1]} de {$this->getAnio()}";
        }
        return $fecha_ext;
    }

    public function fechaAbreviada(){
        $diaFecha = $this->getDia();
        $mesFecha = $this->getMes();
        $anioFecha = $this->getAnio();
        if ($this->getDia() < 10) {
            $diaFecha = "0" . $this->getDia();
        }
        if ($this->getMes() < 10) {
            $mesFecha = "0" . $this->getMes();
        }

        $diaFebrero = $this->getDiaFebrero();

        if (($this->getDia() > 30) && (($this->getMes() == 1) || ($this->getMes() == 4) || ($this->getMes() == 6) || ($this->getMes() == 9) || ($this->getMes() == 11))) {
            $fecha_abr = "Esa fecha no es existente!";
        } elseif (($this->getDia() > 31) && (($this->getMes() == 3) || ($this->getMes() == 5) || ($this->getMes() == 7) || ($this->getMes() == 8) || ($this->getMes() == 10) || ($this->getMes() == 12))) {
            $fecha_abr = "Esa fecha no es existente!";
        } elseif (($this->getDia() > $diaFebrero) && ($this->getMes == 2)) {
            $fecha_abr = "Esa fecha no es existente!";
        } else {
            $fecha_abr = "{$this->getDia()}/{$this->getMes()}/{$this->getAnio()}";
        }

        return $fecha_abr;
    }


    private function incrementar_dia_limite(){
        $diaFebrero = $this->getDiaFebrero();
        $countDias = 0;
        if
        (($this->getDia() >= 30) && (($this->getMes() == 1) || ($this->getMes() == 4) || ($this->getMes() == 6) || ($this->getMes() == 9) || ($this->getMes() == 11))) {
            while ($countDias >= 30) {
                $countDias ++;
            }
        } elseif (($this->getDia() >= 31) && (($this->getMes() == 3) || ($this->getMes() == 5) || ($this->getMes() == 7) || ($this->getMes() == 8) || ($this->getMes() == 10) || ($this->getMes() == 12))) {
            while ($countDias >= 31) {
                $countDias++;
            }
        } elseif (($this->getDia() == $diaFebrero) && ($this->getMes() == 2)) {
            while ($countDias >= $diaFebrero) {
                $countDias++;
            }
        }
    }

    public function incrementa_un_dia()
    {
        $diaFebrero = $this->getDiaFebrero();
        if (($this->getDia() >= 30) && ( ($this->getMes() == 1 ) || ( $this->getMes() == 4 ) || ($this->getMes() == 6) || ($this->getMes() == 9) || ($this->getMes() == 11))) {
            $this->incrementar_dia_limite();
        } elseif (($this->getDia() >= 31) && (($this->getMes() == 3) || ($this->getMes() == 5) || ($this->getMes() == 7) || ($this->getMes() == 8) || ($this->getMes() == 10) || ($this->getMes() == 12))) {
            $this->incrementar_dia_limite();
        } elseif ( ($this->getDia() == $diaFebrero) && ($this->getMes() == 2) ) {
            $this->incrementar_dia_limite();
        } else {
            $this->setDia($this->getDia() + 1);
        }
        $nuevaFecha = "{$this->getDia()} de {$this->getMes()} de {$this->getAnio()}";
        return $nuevaFecha;
    }

    //incrementa una x cantidad de dias y retorna una nueva fecha
    /**
     * @param number
     * @return String
     */
    public function incrementar($cantDias)
    {
        for ($i=1; $i <$cantDias ; $i++) { 
            $this->incrementa_un_dia();
        }
    }

    public function __toString()
    {
        return "{$this->getDia()}/{$this->getMes()}/{$this->getAnio()}";
    }

}