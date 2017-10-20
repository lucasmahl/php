<?php
	require_once("config.php");
	
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");
	
	$headers = array();

	//$key = coluna
	foreach ($usuarios[0] as $key => $value) {
		array_push($headers, ucfirst($key));
	}

	$file = fopen("usuarios.csv", "w+");

	fwrite($file, implode(", ", $headers)."\r\n");

	foreach ($usuarios as $row) {
		$data = array();

		foreach ($row as $key => $value) {
			array_push($data, $value);
		}//fim do foreach de coluna
		fwrite($file, implode(", ", $data)."\r\n");
	}//fim do foreach de linha

	/*//separa os campos de $headers com a ","
	echo implode(", ", $headers);*/

	fclose($file);
?>