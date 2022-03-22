<?php
include 'Reloj.php';

$finalizar = false;
$hora = 00;
$minutos = 00;
$segundos = 00;
$reloj = new Reloj($hora, $minutos, $segundos);

do{
    echo "1: Puesta a cero: "."\n".
    "2: Empesar cronometro"."\n".
    "3: SALIR"."\n".
    "Ingrese una opcion: ";
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case 1:
            $reloj->puesta_a_cero();
            echo "Reloj establecido: ".$reloj->__toString()."\n";
            $finalizar = false;
            break;
        case 2:
            do{
                if (($reloj->getHora() == 23)&&($reloj->getMinutos() == 59)&&($reloj->getSegundos() == 59)) {
                    echo "El cronometro finalizo";
                    $finalizar = true;
                } else {
                    $reloj->incrementar();
                    echo $reloj->__toString()."\n";
                }
            }while(!$finalizar);
            break;
    }
}while($opcion!=3);
