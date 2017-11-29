<?php 

$a = 10 ;
$b = 0  ;	
	//Passagem de parametro por valor
	function trocaValor($a){
		$a = 50 ;
		return $a;
	}

	//Passagem de valor por referencia
	function trocaValorB(&$b){
		$b = 100 ;
		return $b;
	}

echo $a;
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

echo $b;
echo "<br>";
echo trocaValorB($b);
echo "<br>";
echo $b;

?>