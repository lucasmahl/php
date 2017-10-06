<?php
	require_once("config.php");

	echo session_save_path();

	echo "<br/>";

	var_dump(session_status());

	echo "<br/>";

	switch (session_status()) {
		case PHP_SESSION_DISABLED:
			echo "SESSÃO DESABILITADA";	
			break;
		case PHP_SESSION_NONE:
			echo "SESSÃO DESABILITADA MAS NENHUMA EXISTE";	
			break;
			case PHP_SESSION_ACTIVE:
			echo "Sessão habilitada e existente";	
			break;

	}
?>