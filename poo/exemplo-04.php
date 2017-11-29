<?php 

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	/*
	Metodo a seguir cria o getters and setters para todas as variaveis ao inves de fazer um por um
	*/
	public function __construct($a, $b, $c){

		$this->logradouro =$a;
		$this->numero =$b;
		$this->cidade =$c;
	}

	public function __destruct(){

		//var_dump("DETRUIR");

	}

	public function __toString(){
		return $this->logradouro.", ".$this->numero." - ".$this->cidade;
	}

}

	$meuEndereco = new Endereco("Rua Nereu Ramos","2036","Cascavel-PR");

	//var_dump($meuEndereco);
	//unset($meuEndereco);

	echo $meuEndereco;

?>