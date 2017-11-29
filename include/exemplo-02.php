<?php 

/*
Include importa um outro arquivo php para este arquivo,
porém não exige que o arquivo seja importado exista ou que esteja funcionando 
*/

// include "exemplo-01.php";

/* 
Require importa um outro arquivo php para este arquivo, diferença 
para o include é que o 'require' exige que o arquivo a ser importado
exista e que esteja funcionando corretamente.
*/

// require "exemplo-01.php";

//O mais recomendado utilizar o 'require_once' 
require_once "inc/exemplo-01.php";

$resultado = soma(10,30);

echo $resultado;

?>