<?php
	
	//arquivo para download
	$link = "https://www.google.com.br/about/img/social/generic-feed.svg";
	
//conteudo para download
	$content = file_get_contents($link);

	//para interpretar o conteúdo bruto, para tranformar o arquivo q vem da url em arquivo real
	$parse = parse_url($link);


	//para pegar só o path
	$nomebase	=	basename($parse["path"]);
	
	//w+ para criar novo arquivo
	$file = fopen($nomebase, "w+");

	//para escrever dentro do arquivo
	fwrite($file, $content);

	//para fechar o arquivo
	fclose($file);



?>

//substitui o comando echo
<img src="<?=$nomebase?>">