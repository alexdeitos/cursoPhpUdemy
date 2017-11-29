<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Alexsandro de Oliveira");
$cad->setEmail("alexdeitos01@gmail.com");
$cad->setSenha("1234");

//var_dump($cad);
$cad->registrarVenda();

?>