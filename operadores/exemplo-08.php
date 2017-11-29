<?php

//Prioriza a divisao primeiro
$resultado = 10 + 4 / 2 ;
echo $resultado ;

unset($resultado); //zera a variável
echo "<br>";

//Prioriza o que esta entre parenteses
$resultado = (10 + 4) / 2 ;
echo $resultado;

unset($resultado); //zera a variável
echo "<br>";

//Operador de comparação 'e' utiliza-se o && 
$resultado = (10+4) / 2 > 5 && 10 + 4 < 3 ;
var_dump($resultado); 

unset($resultado); //zera a variável
echo "<br>";

//Operador de comparação 'ou' utiliza-se o || 
$resultado = (10+4) / 2 > 5 || 10 + 4 < 3 ;
var_dump($resultado);

?>