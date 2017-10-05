<?php
	$dt = new DateTime();

	// "->" para acessar metódo
	echo $dt->format("H:i:s - d/m/Y");

	//"P"= periodo, "D" = 15 dias /Adiciona um periodo de 15 dias a mais
	$periodo = new DateInterval("P15D");

	$dt->add($periodo);

	echo "<br/>";

	// "->" para acessar metódo
	echo $dt->format("H:i:s - d/m/Y");

?>