<?php

	$qualSuaIdade = 100;

	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;
	if ($qualSuaIdade <= $idadeCrianca) {
		echo "Você é criança.";
	}elseif ($qualSuaIdade < $idadeMaior) {
		echo "Você é adolescente.";
	}elseif ($qualSuaIdade <= $idadeMaior) {
		echo "Você é adulto.";
	} else {
		echo "É velho.";
	}
	
	echo "<br/>";

	//elseif de uma linha só
	echo ($qualSuaIdade < $idadeMaior)? "Menor de idade":"Maior de idade";
	//se for menor, mostra Menor de idade, senão, mostra Maior de idade

	
?>