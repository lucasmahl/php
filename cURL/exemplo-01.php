<?php
	
	$cep = "01001000";
	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);
	
	//definir mais uma opção
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//1 OU 0, SE VC QUER OU NÃO ESSA RESPOTA

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$resposta = curl_exec($ch);

	curl_close($ch);

	$data = json_decode($resposta, true);

	print_r($data);
	echo "<br/>";
	print_r($data["localidade"]);

	
?>