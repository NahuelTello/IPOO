<?php
class Calculadora{
    private $num1;
    private $num2;

    public function __construct($numero1, $numero2){
        $this->num1 = $numero1;
        $this->num2 = $numero2;
    }

    public function getNumero1(){
        return $this->num1;
    }

    public function getNumero2(){
        return $this->num2;
    }

    public function setNumero1($num1In){
        return $this->num1 = $num1In;
    }

    public function setNumero2($num2In)
    {
        return $this->num2 = $num2In;
    }
    /**
     * Devuelve la suma entre dos numeros
     * @param 
     * @return number
      */
    public function suma(){
        $this->resultado = $this->getNumero1() + $this->getNumero2();
        return $this->resultado;
    }

    /**
     * Devuelve la resta entre dos numeros
     * @param 
     * @return number
     */
    public function resta()
    {
        $this->resultado = $this->getNumero1() - $this->getNumero2();
        return $this->resultado;
    }

    /**
     * Devuelve la division entre dos numeros
     * @param 
     * @return number
     */
    public function division()
    {
        $this->resultado = $this->getNumero1() / $this->getNumero2();

        return $this->resultado;
    }

    /**
     * Devuelve la multiplicacion entre dos numeros
     * @param 
     * @return number
     */
    public function multiplicacion()
    {
        $this->resultado = $this->getNumero1() * $this->getNumero2();
        return $this->resultado;
    }

    public function __toString()
    {
        return "Resultado: ".$this->resultado;
    }
}
?>