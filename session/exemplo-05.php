<?php 

require_once("config.php");

//RENOVA O ID DE SESSÃO
session_regenerate_id();

//MOSTRA A ID DE SESSÃO DO USUÁRIO
echo session_id();

var_dump($_SESSION);

?>