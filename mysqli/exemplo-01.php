<?php

	//servidor
	//ip, usuario, senha, banco
	$conn = new mysqli("localhost","root","","dbphp7");

	//testar se deualgum erro com a conexão
	if ($conn->connect_error) {
		echo "Error: " . $conn->connect_error;
		exit;
	}

	//preparar o comando que vai para o banco de dados
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

	//bind = faz a ligacao. s de string
	$stmt->bind_param("ss",$login,$senha);

	$login = "usuario";
	$senha = "password";

	$stmt->execute();

	$login = "usuario2";
	$senha = "123";

	$stmt->execute();
?>