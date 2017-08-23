<?php
	if (!isset($argv[1])) { 
        echo "Digite corretamente um número";
        exit;
    }
    
	$num = $argv[1];
    $existe = false;

    if ($num % 10 == 0) {
        echo $num . " é divisivel por 10" . PHP_EOL;
        $existe = true;
    }
    if ($num % 5 == 0) {
        echo $num . " é divisivel por 5" . PHP_EOL;
        $existe = true;
    }
    if ($num % 2 == 0) {
        echo $num . " é divisivel por 2" . PHP_EOL;
        $existe = true;
    }
    if (existe == false) {
        echo $num . " nao é divisivel por 10, 5 ou 2." . PHP_EOL;
    }
?>