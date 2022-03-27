<?php
include 'Reloj.php';

$finalizar = false;
$hora = 0;
$minutos = 0;
$segundos = 0;
$OBJ_reloj = new Reloj($hora, $minutos, $segundos);

do{
    echo "1: Puesta a cero: "."\n".
    "2: Empesar cronometro"."\n".
    "3: SALIR"."\n".
    "Ingrese una opcion: "."\n";
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case 1:
            $OBJ_reloj->puesta_a_cero();
            echo "Reloj establecido: ". $OBJ_reloj->__toString()."\n";
            break;
        case 2:
            /* do{
                if ((($reloj->getHora()) == 23)&&(($reloj->getMinutos()) == 59)&&(($reloj->getSegundos()) == 59)) {
                    echo "El cronometro finalizo! \n";
                    $finalizar = true;
                } else {
                    $reloj->incrementar();
                    echo $reloj->__toString()."\n";
                }
            }while(!$finalizar); */
            $OBJ_reloj->incrementar();
            break;
    }
}while($opcion!=3);
