<?php
include "Fecha.php";


echo "Ingrese un dia: "."\n";
$dd = trim(fgets(STDIN));
echo "Ingrese un mes: " . "\n";
$mm = trim(fgets(STDIN));
echo "Ingrese un anio: " . "\n";
$aa = trim(fgets(STDIN));

$fecha = new Fecha($dd,$mm,$aa);

echo "Cuantos dias quiere incrementar de la fecha: ". $fecha->__toString()."\n";
$dias_incrementar = trim(fgets(STDIN));

$nueva_fecha = $fecha->incrementar($dias_incrementar);
echo "La nueva fecha es: " . $nueva_fecha."\n";
$nueva_fecha = $fecha->fechaExtendida();
echo "Fecha con formato extendido: " . $nueva_fecha . "\n";
