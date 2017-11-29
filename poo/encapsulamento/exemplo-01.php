<?php 

	class Pessoa {

		public $nome = "alexsandro deitos";
		protected $idade = 23;
		private $senha = "123456";

		public function verDados(){

			echo $this->nome ."<br/>";
			echo $this->idade ."<br/>";
			echo $this->senha ."<br/>";
		}

	}

	$pessoa = new Pessoa();

	//var_dump(verDados);

	//echo $pessoa->nome . "<br/>";
	
	$pessoa->verDados();

?>