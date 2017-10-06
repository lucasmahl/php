<?php

	function soma(int ...$valores){
		return array_sum($valores)."<br/>";
	};

	echo soma(2,2);
	echo soma(3.4,5.4);
	echo soma(2,3,5);
?>