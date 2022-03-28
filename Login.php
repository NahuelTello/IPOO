<?php
class Login{

/* Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite recordar la
contraseña ingresada y las ultimas 4 contraseñas utilizadas. */

    //ATRIBUTOS
    private $nombreUsuario;
    private $password;
    private $frase_pass;
    private $ultimas_pass = ["","","",""];

    //METODOS
    public function __construct($nombreUsuario,$password, $frase_pass, $ultimas_pass)
    {
        $this->userName = $nombreUsuario;
        $this->password = $password;
        $this->frase_pass = $frase_pass;
        $this->ultimas_contrasenias = $ultimas_pass; //Array
    }

    public function getUserName(){
        return $this->userName;
    }
    public function setUserName($name)
    {
        $this->userName = $name;
    } 
//--------------------------------------------//
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($pass)
    {
        $this->password = $pass;
    }
//--------------------------------------------//
    public function getFrasePass()
    {
        return $this->frase_pass;
    }
    public function setFrasePass($frase)
    {
        $this->frase_pass = $frase;
    }
//--------------------------------------------//
    public function getUltimasContrasenias()
    {
        return $this->ultimas_contrasenias;
    }
    public function setUltimasContrasenias($passNew)
    {
        $this->frase_pass = $passNew; //Como hago un seteo de arreglos?
    }
//--------------------------------------------//

    public function almacenarPassword($newPassword){
        $this->setUltimasContrasenias($this->getUltimasContrasenias());
        $this->setUltimasContrasenias($newPassword);
    }
//--------------------------------------------//
/**Implementar un método que permita validar
una contraseña con la almacenada y un método para cambiar la contraseña actual por otra nueva, el
sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es decir no se
encuentra dentro de las cuatro almacenadas). */
    public function validatePass($password){ //CONSULTAR
        $validate = false;  
        $i = 0;
        do{
            if (($password == $this->getPassword()) || ($password == $this->getUltimasContrasenias()[$i])) {
                echo "Contraseña usada recientemente";
                $validate = true;
            } else {
                $this->almacenarPassword($password);
                echo "Contraseña guardada! \n";
                echo "Ingrese una nueva frase para recordar su contraseña: " ;
                $fraseContrasenia = trim(fgets(STDIN));
                $this->setFrasePass($fraseContrasenia);
            }
            $i++;
        }while($i<4);
        
        return $validate;
    }
//--------------------------------------------//
/* Implementar el método recordar que dado el usuario,
muestra la frase que permite recordar su contraseña. */
    public function verFrase(){
        echo "Frase: {$this->getFrasePass()}";
    }
//--------------------------------------------//

    public function cambiarPassword(){
        do{
            echo "Ingrese la nueva contraseña: ";
            $newPassword = trim(fgets(STDIN));
            $contraseniaValidate = $this->validatePass($newPassword);
            echo "\n";
        }while($contraseniaValidate != false);
        echo "Contraseña cambidad exitosamente!";
    }

}