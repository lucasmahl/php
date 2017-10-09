<?php

	$pessoas = array();

	array_push($pessoas, array(
		'nome'=>'Ana',
		'idade'=>20
	));

	array_push($pessoas, array(
		'nome'=>'Lucas',
		'idade'=>10
	));

	print_r($pessoas);
	echo "<br/>";

	print_r($pessoas[0]);
	echo "<br/>";

	print_r($pessoas[1]);
	echo "<br/>";

	print_r($pessoas[0]['nome']);
?>