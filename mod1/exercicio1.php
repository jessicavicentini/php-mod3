<?php
	if (!isset($argv[1]) || !isset($argv[2])){ 
		echo "Digite os dois números corretamente" . PHP_EOL;
		exit;
	}
		$num1 = $argv[1];
		$num2 = $argv[2];
		$soma = $num1 + $num2;
		if ($soma<=20){
			echo $soma . ' -5 é igual a: ' . ($soma-5) . PHP_EOL;
		} else {
			echo $soma . ' +8 é igual a: ' . ($soma+8) . PHP_EOL;
		}

?>