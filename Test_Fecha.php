<?php
include "Fecha.php";

$dd = 01;
$mm = 05;
$aa = 2022;
$dejar_contar = true;

$fecha = new Fecha($dd,$mm,$aa);

echo "Cuantos dias quiere incrementar de la fecha: ". $fecha->__toString()."\n";
$dias_incrementar = trim(fgets(STDIN));

do{
    $nueva_fecha = $fecha->incrementar_un_dia($dias_incrementar);
    $dejar_contar = false;
}while((!$dejar_contar) && ($fecha->getDia() == $dias_incrementar));
    

echo $nueva_fecha;
