<?php
include "Fecha.php";


echo "Ingrese un dia: "."\n";
$dd = trim(fgets(STDIN));
echo "Ingrese un mes: " . "\n";
$mm = trim(fgets(STDIN));
echo "Ingrese un anio: " . "\n";
$aa = trim(fgets(STDIN));

$fecha = new Fecha($dd,$mm,$aa);
echo "Fecha con formato extendido: ".$fecha->fechaExtendida() . "\n";
echo "Cuantos dias quiere incrementar de la fecha: ". $fecha->__toString()."\n";
$dias_incrementar = trim(fgets(STDIN));
$nueva_fecha = $fecha->incrementar($dias_incrementar);
echo "La nueva fecha es: " . $nueva_fecha . "\n";

if ($fecha->getDia()==27 && $fecha->getMes()== 2) {
    echo "Año bisiesto: " . $fecha->incrementar_un_dia($dias_incrementar);
} else {
    echo "La fecha ingresada no es un año bisiesto!";
}

//echo "Fecha con formato extendido: " .  . "\n";


