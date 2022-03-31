<?php
include_once "Cuadrado.php";

$v1 = ["x" => 1, "y" =>6];
$v2 = ["x" => 6, "y" => 6];
$v3 = ["x" => 1, "y" => 1];
$v4 = ["x" => 6, "y" => 1];

$objCuadrado = new Cuadrado($v1,$v2,$v3,$v4);

echo $objCuadrado;
echo $objCuadrado->area();