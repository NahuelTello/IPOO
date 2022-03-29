<?php
include ("Login.php");

$userObj = new Login ("Nahuel1669", 1234, "mi nombre");
echo $userObj->getUser();


echo $userObj->getPassword() . "\n";
echo "lo siguiente es la frase \n";
echo $userObj->getFrase() . "\n";

echo "\n";
echo "--------!------- \n";
echo "\n";

echo " Primer cambio de contraseña \n";
echo $userObj->cambiarPassword();
echo "Contraseña actual: " . $userObj->getPassword() . "\n";
echo $userObj->getPassword1() . "\n";
echo "lo siguiente es la frase \n";
echo $userObj->getFrase() . "\n";

echo "\n";
echo "--------!------- \n";
echo "\n";

echo " Segundo cambio de contraseña \n";
echo $userObj->cambiarPassword();
echo "Contraseña actual: " . $userObj->getPassword() . "\n";
echo $userObj->getPassword1() . "\n";
echo $userObj->getPassword2() . "\n";