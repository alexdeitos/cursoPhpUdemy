<?php 

	$conn = new mysqli("127.0.0.1","root","","dbphp7");

	if($conn->connect_error){
		echo "Error:" . $conn->connect_error;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(?,?)");
	$stmt->bind_param("ss", $login,$password); //ss significa que os dois parametros serão string

	$login = "alexsandro";
	$password = "12345";

	$stmt->execute();

	$login = "root";
	$password = "12345";

	$stmt->execute();

	$login = "user";
	$password = "12345";

	$stmt->execute();

	
	echo "Informação inserida com sucesso";
	

?>