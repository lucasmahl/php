<?php
	$filename = "usuarios.csv";

	if (file_exists($filename)) {
		//faz a leitura do arquivo
		$file = fopen($filename, "r");

		//Pega a 1ª linha do arquivo
		/*$headers = fgets($file);*/

		$headers = explode(", ", fgets($file));

		$data = array();

		while ($row = fgets($file)) {
			$rowData = explode(", ", $row);

			
			
		}

		fclose($file);
	}
	
	
	
?>