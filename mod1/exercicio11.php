<?php
    if(!isset($argv[1]) || !isset($argv[2]) || ($argv[1] < 0)) {
        echo 'Dígite corretamente o número desejado da tabuada e o seu limite' . PHP_EOL;
        exit;
    }
    $num = $argv[1];
    $limit = $argv[2]; 

    for ($i=0; $i <= $limit; $i++) { 
        echo $num . 'x' . $i . ' = ' . ($num * $i). PHP_EOL;
    }
?>