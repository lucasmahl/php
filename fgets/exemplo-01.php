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
			$linha = array();

			//pode ser $header ou $rowData
			for ($i=0; $i < count($headers); $i++) { 
				$linha[$headers[$i]] = $rowData[$i];
			}

			array_push($data, $linha);
		}

		fclose($file);

		echo json_encode($data);
	}

?>