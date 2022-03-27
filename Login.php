<?php
class Login{

/* Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite recordar la
contraseña ingresada y las ultimas 4 contraseñas utilizadas. Implementar un método que permita validar
una contraseña con la almacenada y un método para cambiar la contraseña actual por otra nueva, el
sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es decir no se
encuentra dentro de las cuatro almacenadas). Implementar el método recordar que dado el usuario,
muestra la frase que permite recordar su contraseña. */

    //ATRIBUTOS
    private $nombreUsuario;
    private $password;
    private $frase_pass;
    private $ultimas_pass = ["","","",""];

    //METODOS
    public function __construct($nombreUsuario,$password, $ffrase_pass, $ultimas_pass)
    {
        $this->userName = $nombreUsuario;
        $this->password = $password;
        $this->frase_pass = $ffrase_pass;
        $this->ultimas_contrasenias = $ultimas_pass;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getFrasePass()
    {
        return $this->frase_pass;
    }

    public function getUltimasContrasenias()
    {
        return $this->ultimas_contrasenias;
    }

    public function setUserName($name){
        $this->userName = $name;
    }

    public function setPassword($pass){
        $this->password = $pass;
    }

    public function setFrasePass($frase){
        $this->frase_pass = $frase;
    }





}