<?php
include_once "CuentaBancaria.php";

$objCuenta = new CuentaBancaria(1234,43340691,18000,3);

echo "Nro de cuenta: {$objCuenta->getNroCuenta()} \n";
$objCuenta->setNroCuenta(28042001);

echo "DNI: {$objCuenta->getDni()} \n";
$objCuenta->setDni(22673125);

echo "Saldo actual: {$objCuenta->getSaldoActual()} \n";
$objCuenta->setSaldoActual(180000);

echo "Interes anual: {$objCuenta->getInteresAnual()} \n";
$objCuenta->setInteresAnual(8.3);

$objCuenta->actualizarSaldo();

echo $objCuenta->depositar(5000) . "\n";

echo $objCuenta->retirar(300) . "\n";

echo $objCuenta->__toString() . "\n";