<?php

class Cuadrado{
    /* Crear una clase Cuadrado que modele cuadrados por medio de cuatro puntos (los vértices). Puede utilizar
    arreglos asociativos para implementar cada uno de los vértices. La clase dispondrá de los siguientes métodos:
    */
    private $vertice1;
    private $vertice2;
    private $vertice3;
    private $vertice4;

    public function __construct($vertice1, $vertice2,$vertice3,$vertice4)
    {
        $this->vrtc1 = $vertice1;
        $this->vrtc2 = $vertice2;
        $this->vrtc3 = $vertice3;
        $this->vrtc4 = $vertice4;
    }

    public function getVertice1(){
        return $this->vrtc1;
    }

    public function setVertice1($vertc1){
        $this->vrct1 = $vertc1;
    }

    public function getVertice2()
    {
        return $this->vrtc2;
    }

    public function setVertice2($vertc2)
    {
        $this->vrct1 = $vertc2;
    }

    public function getVertice3(){
        return $this->vrct3;
    }

    public function setVertice3($vertc3){
        $this->vrct = $vertc3;
    }

    public function getVertice4()
    {
        return $this->vrct4;
    }

    public function setVertice4($vertc4)
    {
        $this->vrct = $vertc4;
    }

    /**
     * Calcula el area de un cuadrado
     * @param 
     * @return int
      */
    public function area(){
        $lado = ($this->getVertice2()["X"] - $this->getVertice1()["X"]);
        $area_resultado = pow($lado,2);
        return $area_resultado;
    }

    /* desplazar($d): método que recibe por parámetro un punto y desplaza el cuadrado en el plano desde su
    punto mas inferior izquierdo. */

    public function desplazar($d){
        
    }

}
