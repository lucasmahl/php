<?php

	$json ='[{"nome":"Ana","idade":20},{"nome":"Lucas","idade":25},{"nome":"Giovana","idade":30}]';

	$data = json_decode($json, true);// usar true, porque senão ele vai usar como objeto

	var_dump($data);
	echo "<br/>";
	echo $json;
?>