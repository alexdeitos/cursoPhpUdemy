<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha)VALUES(:LOGIN,:PASSWORD)");

$login = "jose";
$password = "12345";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Inserido OK!";

?>