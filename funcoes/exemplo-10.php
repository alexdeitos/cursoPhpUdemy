<?php 

	//Exemplo de execução de uma função anônima:

	function teste($callback){

		//processo lento

		$callback();

	}

	teste(function() {
		
		echo "Terminou!";

	});

?>