<?php
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");

	echo strftime("%A %B, %e/%m/%Y");
	echo "<br/>";
	echo ucwords(strftime("%A %B, %e/%m/%Y"));//Muda as iniciais para maiusculas
?>