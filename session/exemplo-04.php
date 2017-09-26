<?php
	
	session_id('r065tvrs2t7a3bscph6e1hsnhh');

	require_once("config.php"); //=session_start
	
	session_regenerate_id();

	echo session_id();
	echo "<br/>";
	var_dump($_SESSION);
?>