<?php

	function ola($texto /*= "mundo"*/, $periodo = "Bom dia!" ){//parametros obrigatórios devem sempre vir primeiro, como $texto

		echo "Olar $texto! $periodo <br/>";
	}

	/*echo ola();*/
	echo ola("Mundão");
	echo ola("");
	echo ola("Lucas","Boa tarde");
	echo ola("Mundo","");
?>