<?php
include 'Reloj.php';

$time = new Reloj(20,30,10,1,0);

echo $time -> getHoras()."\n";
echo $time->getMinutos() ."\n";
echo $time->getSegundos() . "\n";
echo $time->getIncremento() ."\n";
echo $time->getPuestaACero() . "\n";
echo $time -> contadorTiempo(20, 30, 10);