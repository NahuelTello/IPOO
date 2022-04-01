<?php
include "Cafetera.php";

$objCafetera= new Cafetera(25,15);

echo "La cafetera posee una capacidad máxima de: " . $objCafetera->getCapacidadMaxima() . "ml.\n";
echo "La cafetera posee una cantidad actual de: " . $objCafetera->getCantidadActual() . "ml.\n";
$objCafetera->llenarCafetera();

echo $objCafetera->servirTaza(200);

$objCafetera->vaciarCafetera();

echo $objCafetera->agregarCafe(800);