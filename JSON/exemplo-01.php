<?php

	$pessoas = array();

	array_push($pessoas, array(
		'nome'=>'Ana',
		'idade'=>20
	));

	array_push($pessoas, array(
		'nome'=>'Lucas',
		'idade'=>20
	));

	echo json_encode($pessoas);
?>