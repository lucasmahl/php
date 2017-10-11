<?php

	//servidor
	//ip, usuario, senha, banco
	$conn = new mysqli("localhost","root","","dbphp7");

	//testar se deualgum erro com a conexão
	if ($conn->connect_error) {
		echo "Error: " . $conn->connect_error;
		exit;
	}

	//faz o select do banco de dados
	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	//para transferir para o jason
	$data = array();

	//MYSQLI_ASSOC TRAZ SEM OS INDICES, APENAS OS NOMES
	while ($row = $result->fetch_array(MYSQLI_ASSOC)){
		array_push($data, $row);
		/*print_r($row);*/
	}
	//printa na tela
	echo json_encode($data);
?>