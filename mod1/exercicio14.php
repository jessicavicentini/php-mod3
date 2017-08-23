<?php
	for ($chico = 1.50, $juca = 1.10, $ano = 0; $juca < $chico ; $ano++, $chico += 0.02, $juca += 0.03 ) { 
	}

	echo 'Anos necessários para que Juca seja maior que Chico:' . $ano . PHP_EOL .
	'Juca tera ' . $juca . 'm' . PHP_EOL . 'Chico tera ' . $chico . 'm' . PHP_EOL;
	
?>