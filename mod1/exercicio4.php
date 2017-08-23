<?php
    if (!isset($argv[1]) || !isset($argv[2]) || !isset($argv[3])) {
        echo 'Digite três numeros corretamente' . PHP_EOL;
        exit;
     }
    
    $num1 = $argv[1];
    $num2 = $argv[2];
    $num3 = $argv[3];

    if (($num1<$num2) || ($num1<$num3)) {
        if ($num2>$num3) {
            $aux  = $num1;
            $num1 = $num2;
            $num2 = $aux; 
        } else {
            $aux = $num1;
            $num1 = $num3;
            $num3 = $aux;
        }
    }
    if ($num2 < $num3) {
        $aux = $num2;
        $num2 = $num3;
        $num3 = $aux;
    }
    echo $num1 . '-' . $num2 . '-' . $num3 . PHP_EOL;
?>
