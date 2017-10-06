<?php

	$pessoa = array(
		'nome'=>'Ellon',
		'idade'=> 30 

	);

	foreach ($pessoa as $value) {
		//Se for int soma 10, igualando idade a 40
		if(gettype($value)==='integer')$value += 10;

		//Muda o nome //Bill tambem pode estar em aspas duplas
		if(gettype($value)==='string')$value = 'Bill';

		echo $value.'<br/>';

	}

	print_r($pessoa);

?>