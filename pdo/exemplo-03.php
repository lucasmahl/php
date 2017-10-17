<?php
	
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	//preparando a query
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(:LOGIN, :PASSWORD)");
	
	$login ="Jose";
	$password = "123456";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();

	echo "Usuário cadastrado!";
?>