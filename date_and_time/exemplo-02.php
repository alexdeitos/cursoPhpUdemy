<?php 

//Saber o timestamp da data informada
$ts = strtotime("1985-01-11");

//Saber o dia da semana dia/mes/ano do timestamp informado
echo date("l d/m/Y",$ts);

?>