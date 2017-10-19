<?php

	require_once("config.php");


	//carrega um usuário
	/*$root = new Usuario();
	$root->loadById(1);
	echo $root;*/

	//carrega uma lista de usuarios
	//usando a funcao static de Usuario.php
	//$lista = Usuario::getList();

	//echo json_encode($lista);

	//Carrega uma lista de usuarios buscando pelo login

	//$search = Usuario::search("usua");
	//echo json_encode($search);

	//carrega um usuario, usando login e senha
	//$usuario = new Usuario();
	//$usuario->login("root","123");
	//echo $usuario;

	//criando um novo usuario
	//$aluno = new Usuario("aluno","123456789");
	/*$aluno->setDeslogin("aluno");
	$aluno->setDessenha("123456");*/
	//$aluno->insert();
	//echo $aluno;

	$usuario = new Usuario();
	$usuario->loadById(9);
	$usuario->update("Professor","qwerty");



?>