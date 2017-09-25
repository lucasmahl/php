<?php

	for ($i=0; $i <= 100; $i+=5) { 
		# code...

		if ($i >= 50 && $i <= 79 ) continue;

		if ($i === 95) break;

		echo "I = " . "$i" . "<br/>";

	}

?>