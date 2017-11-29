<form> <!-- como nao foi informado action por padrão sera metodo get ou seja $_GET !-->
	<input type="text" name="nome">
	<input type="date" name="dataNascimento">
	<input type="submit" value="OK">
</form>

<?php 

	if(isset($_GET)){
		foreach ($_GET as $key => $value) {
			
			echo "Nome do campo: " . $key . "<br>";

			echo "Valor do campo: ". $value;

			echo "<hr>"; // cria uma linha horizontal na tela 
		}
	}
?>