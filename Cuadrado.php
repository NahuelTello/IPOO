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
        $this->vt1 = $vertice1;
        $this->vt2 = $vertice2;
        $this->vt3 = $vertice3;
        $this->vt4 = $vertice4;
    }

    public function getVertice1(){
        return $this->vt1;
    }

    public function setVertice1($vertc1){
        $this->vt1 = $vertc1;
    }

    public function getVertice2()
    {
        return $this->vt2;
    }

    public function setVertice2($vertc2)
    {
        $this->vt1 = $vertc2;
    }

    public function getVertice3(){
        return $this->vt3;
    }

    public function setVertice3($vertc3){
        $this->vt3 = $vertc3;
    }

    public function getVertice4()
    {
        return $this->vt4;
    }

    public function setVertice4($vertc4)
    {
        $this->vt4 = $vertc4;
    }

    /**
     * Calcula el area de un cuadrado
     * @param 
     * @return int
      */
    public function area(){
        $ladoAB = ($this->getVertice2())["x"] - ($this->getVertice1())["x"];
        $ladoAC = ($this->getVertice2())["y"] - ($this->getVertice1())["y"] ;
        return $ladoAB * $ladoAC;
    }

    /* desplazar($d): método que recibe por parámetro un punto y desplaza el cuadrado en el plano desde su
    punto mas inferior izquierdo. */
    /**
     * Recibe por parametro un punto y desplaza el cuadrado en el plano desde su punto mas inferior izquierdo
     * @param array $d
     * @return array
      */
    public function desplazar($d){
        //calculamos la distancia entre los puntos x e y
        $distanciaX = $d["x"] - ($this->getVertice1())["x"];
        $distanciaY = $d["y"] - ($this->getVertice1())["y"];

        //Modifico las coordenadas del vertice 1
        $v1X = $this->getVertice1()["x"];
        $v1Y = $this->getVertice1()["y"];

        $arrayV1 = ["x" => ($v1X + $distanciaX), "y" =>($v1Y + $distanciaY)]; //Este arreglo almacenara las distancias de los puntos x e y
        //las seteamos
        $this->setVertice1($arrayV1);

        $arrayV2 = ["x" => (($this->getVertice2())["x"] + $distanciaX), "y" => (($this->getVertice2())["y"] + $distanciaY)];
        $this->setVertice2($arrayV2);

        $arrayV3 = ["x" => (($this->getVertice3())["x"] + $distanciaX), "y" => (($this->getVertice3())["y"] + $distanciaY)];
        $this->setVertice3($arrayV3);

        $arrayV4 = ["x" => (($this->getVertice4())["x"] + $distanciaX), "y" => (($this->getVertice4())["y"] + $distanciaY)];
        $this->setVertice4($arrayV4);

    }

    /**Metodo para aumentar tamaño, se usa de pivote el punto C 
     * @param float $t
     * @return void
     */
    public function aumentarTamanio($t){
        $this->getVertice1()["x"] += $t;
        $this->getVertice2()["y"] += $t;
        $this->getVertice3()["x"] += $t;
        $this->getVertice4()["y"] += $t;
    }

    public function __toString(){
        $puntos = "";
        $punto1 = [$this->getVertice1()["x"],$this->getVertice1()["y"]];
        $puntos .= "Punto A ($punto1[0]/$punto1[1]) \n";
        $punto2 = [$this->getVertice2()["x"], $this->getVertice2()["y"]];
        $puntos .= "Punto B ($punto2[0]/$punto2[1]) \n";
        $punto3 = [$this->getVertice3()["x"], $this->getVertice3()["y"]];
        $puntos .= "Punto C ($punto3[0]/$punto3[1]) \n";
        $punto4 = [$this->getVertice4()["x"], $this->getVertice4()["y"]];
        $puntos .= "Punto D ($punto4[0]/$punto4[1]) \n";
        return $puntos;
    }
 
}
