<?php 

//INICIA A SEÇÃO NESSA PÁGINA
require_once("config.php");

//ENCERRA A SEÇÃO MAS AINDA MANTÉM O USUÁRIO
session_unset($_SESSION["nome"]);

echo $_SESSION["nome"];

//TAMBÉM ENCERRA A SEÇÃO E LIMPA O USUÁRIO TAMBÉM
session_destroy();

?>