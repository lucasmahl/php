<?php 

	$nome = "Hcpde";
	$site = "www.hcode.com.br";
	$ano = 1990;
	$salario = 5500.99;
	$bloqueado = false;

	$frutas = array("Abacaxi","Limão","Laranja","Manga","Melancia");
	echo $frutas[1]."<br/>";

	$nascimento = new DateTime();
	//var_dump($nascimento);

	$arquivo = fopen("exemplo-03.php", "r");
	//var_dump($arquivo);

	$nulo = NULL;

 ?>