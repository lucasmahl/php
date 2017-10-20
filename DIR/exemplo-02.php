<?php
	//escanear o diretorio
	$imagens = scandir("images");

	/*var_dump($imagens)*/

	//convertendo em jason
	$data= array();

	//$imagens=array e $img=imagem
	foreach ($imagens as  $img) {
		//in_array faz uma busca dentro do array. Vai desconsiderar "." e ".."
		if (!in_array($img, array(".",".."))) {
				$filename = "images".DIRECTORY_SEPARATOR."$img";

				//obter informações uteis de um arquivo
				$info = pathinfo($filename);

				//pegar o tamanho do arquivo
				$info["size"] = filesize($filename);

				//mostra qndo o arquivo foi modificado
				$info["modified"] = date("d/m/Y - H:i:s", filemtime($filename));

				//str_replace troca a \ pela /,qndo necessario
				$info["url"] = "http://localhost/php/dir/".str_replace("\\","/",$filename);

				//$info vai ser adicionado na variavel $data
				array_push($data, $info);
		}
		//echo do array $data
		echo json_encode($data)."<br/>";
	}
	
	
?>