<?php

	function ola($texto = "mundo", $periodo = "Bom dia!" ){

		echo "Olar $texto! $periodo <br/>";
	}

	echo ola();
	echo ola("");
	echo ola("Lucas","Boa tarde");
	echo ola("Mundo","");
?>