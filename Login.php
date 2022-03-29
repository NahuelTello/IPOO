<?php
class Login{

    /* Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite recordar la
contraseña ingresada y las ultimas 4 contraseñas utilizadas. */

    //ATRIBUTOS
    private $user;
    private $password;
    private $password1;
    private $password2;
    private $password3;
    private $frase;

    //METODOS
    public function __construct($user,$password, $frasePass)
    {
        $this->usuario = $user;
        $this->contrasenia = $password;
        $this->contrasenia1 = $password;
        $this->contrasenia2 = $password;
        $this->contrasenia3 = $password;
        $this->frase = $frasePass;
    }

    public function getUser(){
        return $this->usuario;
    }

    public function setUser($userName){
        $this->usuario = $userName;
    }

    public function getPassword(){
        return $this->contrasenia;
    }

    public function setPassword($userPassword){
        $this->contrasenia = $userPassword;
    }

    public function getPassword1(){
        return $this->contrasenia1;
    }

    public function setPassword1($userPassword){
        $this->contrasenia1 = $userPassword;
    }

    public function getPassword2(){
        return $this->contrasenia2;
    }

    public function setPassword2($userPassword){
        $this->contrasenia2 = $userPassword;
    }

    public function getPassword3()
    {
        return $this->contrasenia3;
    }

    public function setPassword3($userPassword)
    {
        $this->contrasenia3 = $userPassword;
    }

    public function getFrase(){
        return $this->frase;
    }

    public function setFrase($frasePass){
        $this->frase = $frasePass;
    }


/* Implementar el método recordar que dado el usuario,
muestra la frase que permite recordar su contraseña. */
    public function verFrase(){
        echo "Frase: {$this->getFrase()}";
    }
//--------------------------------------------//

/**Implementar un método que permita validar
una contraseña con la almacenada y un método para cambiar la contraseña actual por otra nueva, el
sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es decir no se
encuentra dentro de las cuatro almacenadas). */
    public function validatePass($password){ //CONSULTAR
        $validate = false;  
        if ($password == $this->getPassword() || $password == $this->getPassword1() || $password == $this->getPassword2() || $password == $this->getPassword3()) {
            echo "Contraseña usada recientemente \n";
            $validate = true;
        } else {
            $this->guardarContrasenia($password);
            echo "Contraseña guardada! \n";
            echo "Ingrese una nueva frase para recordar su contraseña: \n";
            $fraseContrasenia = trim(fgets(STDIN));
            $this->setFrase($fraseContrasenia);
        }
        
        return $validate;
    }

    private function guardarContrasenia($contraseniaNueva)
    {

        $this->setPassword3($this->getPassword2());
        $this->setPassword2($this->getPassword1());
        $this->setPassword1($this->getPassword());
        $this->setPassword($contraseniaNueva);
    }
//--------------------------------------------//

    public function cambiarPassword(){
        do{
            echo "Ingrese la nueva contraseña: \n";
            $newPassword = trim(fgets(STDIN));
            $contraseniaValidate = $this->validatePass($newPassword);
            echo "\n";
        }while($contraseniaValidate == true);
        echo "Contraseña cambidad exitosamente!\n";
    }

}