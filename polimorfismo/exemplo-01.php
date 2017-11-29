<?php 

	abstract class Animal {

		public function falar()
		{

			return "som";

		}

		public function mover()
		{

			return "Anda";

		}

	}

	class Cachorro extends Animal
	{
		
		public function falar()
		{

			return "Late";

		}

	}

	class Gato extends Animal
	{

		public function falar()
		{

			return "Mia";

		}

	}

	class Passaro extends Animal
	{

		public function falar(){

			return "Assovia";
		}

		public function mover(){

			return "Voa e " . parent::mover();
		}

	}

	$pluto = new Cachorro();


	echo "O cachorro:</br></br>";
	echo $pluto->falar();
	echo " e ";
	echo $pluto->mover() . "<br/>";

	echo "------------------<br/>";

	$garfield = new Gato();

	echo "O gato:</br></br>";
	echo $garfield->falar();
	echo " e ";
	echo $garfield->mover() . "<br/>";

	echo "------------------<br/>";

	$canario = new Passaro();

	echo "O Passaro:</br></br>";
	echo $canario->falar();
	echo " e ";
	echo $canario->mover(). "<br/>";;

?>