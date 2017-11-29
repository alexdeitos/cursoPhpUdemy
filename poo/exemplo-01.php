<?php 

class Pessoa {

	//o símbolo da setinha -> no PHP signigica basicamente o que o sinal de . significa no java

	public $nome; //Atributo da classe Pessoa

	//Inicio metodo 
	public function falar(){

		return "O meu nome é ".$this->nome; 

	}
	//Fim do metodo
}

	$alex = new Pessoa();
	$alex->nome = "Alexsandro Deitos";
	
	//No Java seria System.out.println(alex.falar());
	echo $alex->falar();

?>