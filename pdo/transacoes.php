<?php
	
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	//iniciar transação
	$conn->beginTransaction();

	//preparando a query
	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
	
	$id = 4;

	$stmt->execute(array($id));

	//Cancela a tranzação
/*	$conn->rollback();*/

	$conn->commit();

	echo "Delete ok!";
?>