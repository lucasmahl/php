<?php
	$file = fopen("teste.txt", "w+");

	fclose($file);

	unlink("teste.txt");
	echo "Arquivo $file removido com sucesso!";

?>