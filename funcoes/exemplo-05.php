<?php

	$a = 10;

	function trocaValor($a){
		$a += 50;
		return $a;
	}

	echo $a;
	echo "<br/>";
	echo trocaValor($a);//soma 50
	echo "<br/>";
	echo $a; //o trocaValor não alterou a variável

//& = passagem de parametro por referência
	function alteraValor(&$b){
		$b += 50;
		return $b;
	}

	echo "<br/>";
	echo alteraValor($a);
	echo "<br/>";
	echo $a; 

?>