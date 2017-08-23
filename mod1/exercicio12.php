<?php
    if (!isset($argv[1])) {
    		echo "Dígite uma palavra";
        	exit;
        }
        $word = $argv[1]; 
		echo 'Palavra: ' . $word;
        for ($i = 0; $i <= 4; $i++) { 
        	for ($j = 0; $j < $i; $j++) { 
        		echo $word . ' ';
        	}
        	echo PHP_EOL;
        }
?>