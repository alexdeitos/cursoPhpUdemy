<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

//$login = "joao";
//$password = "qwe123";
$id = 2;

//$stmt->bindParam(":LOGIN",$login);
//$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Registro removido OK!";

?>