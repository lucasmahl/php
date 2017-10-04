<?php
	$dt = new DateTime();

	// "->" para acessar metódo
	echo $dt->format("H:i:s - d/m/Y");

	//"P"= periodo, "D" = 15 dias
	$periodo = new DateInterval("P15D");

	$dt->add($periodo);

	echo "<br/>";

	// "->" para acessar metódo
	echo $dt->format("H:i:s - d/m/Y");


?>