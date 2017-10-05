<?php

	echo date("H:i:s - D/M - d/m/Y");

	echo "<br/>";
	echo time();

	//testando data e hora local
	date_default_timezone_set('America/Sao_Paulo');
	$data = date('d/m/Y');
	$hora = date('H:i:s');

	echo "<br/>";
	echo $data."<br/>";
	echo $hora."<br/>";

?>