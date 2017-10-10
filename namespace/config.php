<?php
	
	//funcao pra procurar a classe
	spl_autoload_register(function($nameClass){
		var_dump($nameClass);

		//pasta em se deve procurar as classes
		$dirClass = "class";
		$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

		//verificar se o arquivo existe
		if(file_exists($filename)===true){
			//se existir, ele será incluído no código
			require_once($filename);
		}

	});

?>