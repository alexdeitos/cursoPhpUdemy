<?php 

$carros[0][0]="GM";
$carros[0][1]="Cobalt";
$carros[0][2]="Onix";
$carros[0][3]="Camaro";

$carros[1][0]="Ford";
$carros[1][1]="Fiesta";
$carros[1][2]="Fusion";
$carros[1][3]="Edge";

echo $carros[0][3];
echo "<br>";
echo end($carros[1]); // traz o ultimo elemento do array [1] - ford

?>