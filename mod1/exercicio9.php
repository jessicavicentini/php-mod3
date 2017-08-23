<?php
    if (!isset($argv[1])) {
        echo "Dígite um número corretamente" . PHP_EOL;
        exit;
    }
    $num = $argv[1];
    for ($i=0; $i < $num ; $i++) { 
        echo 'SOL'. PHP_EOL;
    }
?>