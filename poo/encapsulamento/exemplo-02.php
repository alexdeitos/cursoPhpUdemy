<?php 

	class Pessoa {

		public $nome = "alexsandro deitos"; //Public - Orelhao - todos usam
		protected $idade = 23;				//Protected - Telefone de casa - somente mae e filhos
		private $senha = "123456";			//Private - Seu Celular - somente você

		public function verDados(){

			echo $this->nome ."<br/>";
			echo $this->idade ."<br/>";
			echo $this->senha ."<br/>";
		}

	}

	class Programador extends Pessoa {

		
		//Quando chamado este metodo não mostrará a senha pois a mesma é private.
		public function verDados(){

			echo get_class($this) . "<br/>";

			echo $this->nome ."<br/>";
			echo $this->idade ."<br/>";
			echo $this->senha ."<br/>";
		
		} 

	}

	$pessoa = new Programador();

	//var_dump(verDados);

	//echo $pessoa->nome . "<br/>";
	
	$pessoa->verDados();

?>