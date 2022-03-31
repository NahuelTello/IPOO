<?php
class Linea{
    private $pA;
    private $pB;
    private $pC;
    private $pD;
    private $punto1;
    private $punto2;

    public function __construct($puntoA,$puntoB,$puntoC,$puntoD)
    {
        $this->pA = $puntoA;
        $this->pB = $puntoB;
        $this->pC = $puntoC;
        $this->pD = $puntoD;
        $this->punto1 = [$puntoA, $puntoB];
        $this->punto2 = [$puntoC, $puntoD];
    }


    public function getPuntoA(){
        return $this->pA;
    }

    public function setPuntoA($pA){
        $this->pA = $pA;
        $this->punto1[0] = $pA;
    }

    public function getPuntoB()
    {
        return $this->pB;
    }

    public function setPuntoB($pB)
    {
        $this->pB = $pB;
        $this->punto1[1] = $pB;
    }

    public function getPuntoC()
    {
        return $this->pC;
    }

    public function setPuntoC($pC)
    {
        $this->pA = $pC;
        $this->punto2[0] = $pC;
    }

    public function getPuntoD()
    {
        return $this->pD;
    }

    public function setPuntoD($pD)
    {
        $this->pA = $pD;
        $this->punto2[1] = $pD;
    }

    /**Funcion para mover para la derecha
     * @param float $d
     * @return void
     */
    public function mueveDerecha($d){
        $this->pA += $d;
        $this->pC += $d;
        $this->punto1[0] = $this->pA;
        $this->punto2[0] = $this->pC;
    }

    /**Funcion para mover a la izquierda
     * @param float $d
     * @return void
     */
    public function mueveIzquierda($d)
    {
        $this->pA -= $d;
        $this->pC -= $d;
        $this->punto1[0] = $this->pA;
        $this->punto2[0] = $this->pC;
    }

    /**Funcion para mover hacia arriba
     * @param float $d
     * @return void
     */
    public function mueveArriba($d)
    {
        $this->pB += $d;
        $this->pD += $d;
        $this->punto1[1] = $this->pB;
        $this->punto2[1] = $this->pD;
    }

    /**Funcion para mover hacia abajo
     * @param float $d
     * @return void
     */
    public function mueveAbajo($d)
    {
        $this->pB -= $d;
        $this->pD -= $d;
        $this->punto1[1] = $this->pB;
        $this->punto2[1] = $this->pD;
    }

    public function __toString()
    {
        $puntoA = $this->pA;
        $puntoB = $this->pB;
        $puntoC = $this->pC;
        $puntoD = $this->pD;
        $str = "Punto 1: ($puntoA, $puntoB)\nPunto 2: ($puntoC, $puntoD)\n";
        return $str;
    }
}