<?php

	function __autoload($nomeClasse){
		var_dump($nomeClasse);
		echo "<br/>";
		require_once("$nomeClasse.php");
		echo "<br/>";
	}

	$carro = new DelRey();

	$carro->acelerar(100);
	$carro->frenar(100);
?>