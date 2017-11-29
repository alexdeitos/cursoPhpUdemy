<?php 

//Função definida para receber um array de valores do tipo inteiro
function soma(int ...$valores){

	//função array_sum soma os valores de um array
	return array_sum($valores);

}

//testes
echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5,3.2); //como na função eu defini que ira inteiros os parametros, aqui ele ira ignorar a parte decimal
echo "<br>";

?>