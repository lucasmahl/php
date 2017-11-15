<?php
	
	$dir1 = "foler_01";
	$dir2 = "foler_02";

	//if de 1 linha
	if (!is_dir($dir1)) mkdir($dir1);
	if (!is_dir($dir2)) mkdir($dir2);
	
	$filename = "README.txt";

	if(!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)){

		$file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");

		fwrite($file, date("H:i:s d-m-Y"));

		fclose($file);
	}
	
	//muda o local do arquivo(nomea do arquivo original, pra onde ele vai)
	rename($dir1.DIRECTORY_SEPARATOR.$filename, $dir2.DIRECTORY_SEPARATOR.$filename);

	echo "Arquivo movido.";

?>