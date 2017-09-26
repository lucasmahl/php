<?php
	
	require_once("config.php");

	session_unset($_SESSION['nome']);

	//aqui usamos o valor da $_SESSION
	echo $_SESSION['nome'];

	session_destroy();
?>