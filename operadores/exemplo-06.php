<?php

$a = null ;
$b = null ;
$c = 10 ;
$d = 21 ;

/*
Operador ?? (interrogação interrogação) valida se variável é nula se for ele ignora e vai para proxima variável até achar e imprimir a primeira não nula 
*/
echo "Imprime a primeira variavel nao nula:<br>";
echo $a ?? $b ?? $c ?? $d;

?>