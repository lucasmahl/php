<?php
	//fopen(caminho do arquivo, acao)
	$file = fopen("log.txt", "a+");/*w+ para escrever*/
	
	date_default_timezone_set('America/Sao_Paulo');
	fwrite($file, date("d/m/Y - H:i:s")."\r\n");

	//fecha o manipulador
	fclose($file);

	echo "Arquivo $file criado com sucesso!";
?>