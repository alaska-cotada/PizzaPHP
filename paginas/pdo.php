<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbadm", "", "root");

$stmt= $conn -> prepare ("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "adm";
$password = "123456";

$stmt ->bindParam(":LOGIN", $login);
$stmt ->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Usuario cadastrado com sucesso!!!";

?>