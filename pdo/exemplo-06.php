<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ? ");

$id = 4;

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();

echo "Registro removido OK!";

?>