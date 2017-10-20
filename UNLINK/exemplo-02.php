<?php
	//deletando arquivos dentro de uma pasta

	if (!is_dir("pastaimagens")) mkdir("pastaimagens");

	//scandir le um diretorio e transforma num array
	foreach (scandir("pastaimagens") as $item) {
		//tirando os pontos
		if (!in_array($item, array(".",".."))) {
			
			unlink("pastaimagens/".$item);
		}
	}
	
	echo "Arquivos deletados!";
	
?>