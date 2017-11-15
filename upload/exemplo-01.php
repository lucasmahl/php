<!-- enctype permite q vc coloque o tipo de informação q vc está enviando
 -->
<form action="" method="POST" enctype="multipart/form-data">

	<input type="file" name="arquivoUpload">
	
	<button type="submit">Send</button>

</form>

<?php
	
	//guarda qual o tipo da solicitacao
if ($_SERVER["REQUEST_METHOD"]==="POST") {
	$file = $_FILES["arquivoUpload"];
	
	if ($file["error"]) {
		throw new Exception("Erro: ".$file["error"]);
		
	}


	$dirUploads = "uploads";

	//senão for um diretorio
	if (!is_dir($dirUploads)) {
		mkdir($dirUploads);
	}
	
	if (move_uploaded_file($file["tmp_name"], $dirUploads. DIRECTORY_SEPARATOR.$file["name"])){
		echo "Upload realizado com sucesso!";
	}else{
		throw new Exception("Não foi possível efetuar upload.");
		
	}

}
	
?>