<?php 

$qualSuaIdade = 111 ;

$idadeCriança = 12;
$idadeJovem   = 18;
$idadeAdulto  = 30;
$idadeIdoso   = 60;

	switch ($qualSuaIdade) {
		case $qualSuaIdade <= 12:
			echo "criança";
		break;
		case $qualSuaIdade > 12 && $qualSuaIdade<=18:
			echo "jovem";
		break;
		case $qualSuaIdade > 18 && $qualSuaIdade<=30:
			echo "adulto";
		break;
		case $qualSuaIdade > 30 && $qualSuaIdade<=60:
			echo "idoso";
		break;
		default:
			echo "matusalem";
		break;
	}
?>