<?php
require_once('Linea.php');
//Programa para probar la clase linea y sus metodos
$objLinea = new Linea(2, 3, 4, 5);
//Getter y setter de A
echo "El punto A vale:" . $objLinea->getPuntoA() . "\n";
$objLinea->setPuntoA(7);

//Getter y setter de B
echo "El punto B vale:" . $objLinea->getPuntoB() . "\n";
$objLinea->setPuntoB(9);

//Getter y setter de C
echo "El punto C vale:" . $objLinea->getPuntoC() . "\n";
$objLinea->setPuntoC(3);

//Getter y setter de D
echo "El punto D vale:" . $objLinea->getPuntoD() . "\n";
$objLinea->setPuntoD(5);

//Mover hacia la derecha
$objLinea->mueveDerecha(5);
//Mover hacia la izquierda
$objLinea->mueveIzquierda(3);
//Mover hacia arriba
$objLinea->mueveArriba(6);
//Mover hacia abajo
$objLinea->mueveAbajo(2);
//toString
echo $objLinea->__toString();