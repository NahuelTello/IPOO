<?php
include 'Calculadora.php';

$a = new Calculadora(0,0);
$operando="";

echo "Ingrese que operacion quiere realizar: (+,-,*,/) ";
$operando = trim(fgets(STDIN));

switch ($operando) {
    case '+':
        echo "Ingrese el primer numero: ";
        $a->setNumero1(trim(fgets(STDIN)));
        echo "Ingrese el segundo numero: ";
        $a -> setNumero2(trim(fgets(STDIN)));
        $a->suma();
        echo $a ->__toString();
        break;
    case '-':
        echo "Ingrese el primer numero: ";
        $a->setNumero1(trim(fgets(STDIN)));
        echo "Ingrese el segundo numero: ";
        $a->setNumero2(trim(fgets(STDIN)));
        $a->resta();
        echo $a->__toString();
        break;
    case '*':
        echo "Ingrese el primer numero: ";
        $a->setNumero1(trim(fgets(STDIN)));
        echo "Ingrese el segundo numero: ";
        $a->setNumero2(trim(fgets(STDIN)));  
        $a->multiplicacion(); 
        echo $a->__toString();
        break;
    case '/':
        echo "Ingrese el primer numero: ";
        $a->setNumero1(trim(fgets(STDIN)));
        echo "Ingrese el segundo numero: ";
        $a->setNumero2(trim(fgets(STDIN)));
        $a->division();
        echo $a->__toString();
        break;
    
}

