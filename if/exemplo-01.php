<?php 

$qualASuaIdade = 9;

$idadeCrianca = 12;
$idadeJovem   = 18;
$idadeIdoso   = 65;

if ($qualASuaIdade <= 12){
	echo "É criança!";
}else if ($qualASuaIdade > 12 && $qualASuaIdade <= 18){
	echo "É Jovem!";
}else if ($qualASuaIdade > 18 && $qualASuaIdade <= 65){
	echo "É adulto!";
}else{
	echo "É idoso!";
}

 ?>