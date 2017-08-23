<?php
    if (!isset($argv[1])) {
        echo 'Dígite um número corretamente' . PHP_EOL;
        exit;
    }
    
    $num = $argv[1];
    $prod = 1;
    echo '1';

    for ($i=2; $i <= $num ; $i++) { 
        echo ' x ' . $i;
        $prod *= $i;
    }
    echo ' = ' . $prod . PHP_EOL;

?>
