<?php

	spl_autoload_register(function($class_name){
		


/*		testando dicas*/
		//$dirClass = "class";
		$class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);








		$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

		if (file_exists(($filename))) {
			require_once($filename);
		}

	});

?>