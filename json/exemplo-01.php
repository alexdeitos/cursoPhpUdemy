<?php 

$pessoas = array();

//Função array_push insere um item ou outro array ao array já existente
array_push($pessoas, array(
	'nome'=>'Alexsandro',
	'idade'=>20
));


array_push($pessoas, array(
	'nome'=>'Pedro',
	'idade'=>50
));

//print_r($pessoas[0]['nome']);

echo json_encode($pessoas);

?>