<?php 

	$anoNascimento = 1992;
	$nome1 = "Lucas";
	$sobrenome = "Mahl";
	$nomeCompleto = $nome1 . " " . $sobrenome;
	echo $nomeCompleto;
	echo "<br/>";

	var_dump($anoNascimento);
	echo "<br/>";
	var_dump($nome1);
	echo "<br/>";
	unset($anoNascimento, $nome1); /*unset apaga as variaveis	*/

	if (isset($nome1)) {
		# Se nome1 existe...
		echo "$nome1";
	}else{
		echo "Variável não existe";
	}




	echo "<br/>";
	echo $anoNascimento;
	echo "<br/>";
	echo $nome1;
?>