<?php
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");
	date_default_timezone_set('America/Sao_Paulo'); //Para por no horário do brasil

	echo strftime("%A %B, %e/%m/%Y");
	echo "<br/>";
	echo ucwords(strftime("%A %B, %e/%m/%Y"));//Muda as iniciais para maiusculas

	echo "<br/>";
	echo strftime("%I:%M:%S - %A %B, %e/%m/%Y");


?>