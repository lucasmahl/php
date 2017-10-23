<?php
	$filename = "phpLogo.png";

	//recebe a string formata em b64
	//file_get_contents Le o conteudo de um arquivo
	$base64 = base64_encode(file_get_contents($filename));
	
	$fileinfo = new finfo(FILEINFO_MIME_TYPE);
	$mimetype = $fileinfo->file($filename);	

	/*echo "data:images/png;base64,".$base64;*/
	$base64encode = "data:".$mimetype.";base64,".$base64;
	
	
?>

<a href="<?=$base64encode?>" target="_blank" >Link para a imagem.</a>
<img src="<?=$base64encode?>">