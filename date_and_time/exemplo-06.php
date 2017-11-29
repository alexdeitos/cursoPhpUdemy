<?php 

$dt = new DateTime();

//Define um objeto com intervalo de 15 dias para periodo
$periodo = new DateInterval("P15D");

//Mostra a data atual
echo $dt -> format('d/m/Y h:i:s');

//faz a soma da data atual com a do periodo que esta com 15 dias 
$dt -> add($periodo);

echo "<br>";

//imprime o resultado da soma da data atual mais 15 dias
echo $dt -> format('d/m/Y h:i:s');

?>