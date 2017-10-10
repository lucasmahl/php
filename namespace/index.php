<?php
	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Djalma Sindeaux");
	$cad->setEmail("dijalma@hcode.com.br");
	$cad->setSenha("123456");

	//chama o método toString
	echo $cad->registrarVenda();
?>