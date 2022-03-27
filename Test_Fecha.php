<?php
include "Fecha.php";


echo "Ingrese un dia: "."\n";
$dd = trim(fgets(STDIN));
echo "Ingrese un mes: " . "\n";
$mm = trim(fgets(STDIN));
echo "Ingrese un anio: " . "\n";
$aa = trim(fgets(STDIN));

$fecha = new Fecha($dd,$mm,$aa);

echo "De la fecha: ".$fecha." Cuantos dias quiere incrementar? "."\n";
$incrementar = trim(fgets(STDIN));
$fecha->incrementar($incrementar);
echo $fecha->incrementa_un_dia() . "\n";
echo $fecha->fechaAbreviada() . "\n";
echo $fecha->fechaExtendida() . "\n";


