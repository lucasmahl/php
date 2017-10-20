<?php
	
	//verifica se o diretorio existe

	$nome = "images";

	//se diretorio não existe
	if (!is_dir($nome)) {
		//senão existe, cria o diretório
		mkdir($nome);
		echo "Diretório $nome criado com sucesso!";
	}else{

		//remove o diretorio
		rmdir($nome);

		echo "O diretorio '$nome' foi removido.";
	}
	
	
?>