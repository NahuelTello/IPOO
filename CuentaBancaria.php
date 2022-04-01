<?php
class CuentaBancaria {

    //Atributos
    private $nroCuenta;
    private $DNI;
    private $saldoActual;
    private $interesAnual;

    public function __construct($nCuenta, $dni, $saldo, $interes)
    {
        $this->nroCuenta = $nCuenta;
        $this->DNI = $dni;
        $this->saldoActual = $saldo;
        $this->interesAnual = $interes;
    }

    //Metodos getters y setters
    
    public function getNroCuenta(){
        return $this->nroCuenta;
    }

    public function setNroCuenta($n){
        $this->nroCuenta = $n;
    }

    public function getDni(){
        return $this->DNI;
    }

    public function setDni($n){
        $this->DNI = $n;
    }

    public function getSaldoActual(){
        return $this->saldoActual;
    }

    public function setSaldoActual($n){
        $this->saldoActual = $n;
    }

    public function getInteresAnual(){
        return $this->interesAnual;
    }

    public function setInteresAnual($n){
        $this->interesAnual = $n;
    }


    /**
     * Actualizara el saldo de la cuentaa aplicandole el interes diario
     * 
     * @param void
     * @return void
     */
    public function actualizarSaldo(){
        $saldoActualizado = $this->saldoActual + ($this->interesAnual/ 365) ;
        return $saldoActualizado;
    }

    /**
     * Permite ingresar una cantidad de dinero en la cuenta
     * 
     * @param float $cant
     * @return void
    */
    public function depositar($cant){
        $depositado = $this->saldoActual += $cant;
        $resultado = "Acaba de depositar $".$cant." y su saldo actual ahora es de $".$depositado;
        return $resultado;
    }

    /**
     * Permite retirar una cantidad de dinero de la cuenta si hay saldo
     * 
     * @param float $cant
     * @return void
      */
    public function retirar($cant){

        if($this->getSaldoActual() < $cant){
            $resultado = "No hay esa cantidad para retirar!";
        } else {
            $saldoRestante = $this->saldoActual -= $cant;
            $resultado = "Usted a retirado $".$cant." y su saldo actual ahora es de $".$saldoRestante;
        }
        return $resultado;
    }

    public function __toString()
    {
        $str = "Numero de cuenta: {$this->getNroCuenta()} \n"."DNI: {$this->getDni()}"." \nSaldo actual: $".$this->getSaldoActual()."\n"."Interes Anual: {$this->getInteresAnual()}";
        return $str;
    }
}