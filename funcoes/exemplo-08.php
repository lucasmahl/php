<?php

	function soma(float ...$valores):string{
		return array_sum($valores)."<br/>";
	};

	echo soma(2,2);
	echo var_dump(soma(3.2,5.3));
?>