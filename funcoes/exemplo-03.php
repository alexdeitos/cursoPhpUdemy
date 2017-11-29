<?php 

//função passando 1 parametro porém o parametro não é obrigatorio pois tem valor padrão
function ola($texto = "mundo"){

	return "Olá $texto!<br>";

}
//função passando 2 parametros não obrigatorios pois tem valor padrão
function ola1($texto = "mundo", $periodo = "Bom dia"){
	return "Olá $texto, $periodo !<br>";
}

echo ola();
echo ola("");
echo ola("Joao");
echo ola("glaucio");
echo ola1();
echo ola1("Alexsandro","Boa Noite");

?>