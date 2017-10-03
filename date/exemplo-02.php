<?php
	$ts = strtotime("2017-11-20");
	/*$ts = strtotime("+1 day");*/
	/*$ts = strtotime("+1 week");*/
	/*$ts = strtotime("now");*/

	echo date("l, d/m/Y", $ts);
?>