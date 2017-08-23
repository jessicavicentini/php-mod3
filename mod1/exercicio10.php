<?php
    $numeros = [1, 34, -3, -4, -5, 12, 7, 8, -9, -10, 11, 23, 13, 14, 15, -26, 17, -18 , 19, 20]; 
    $soma = 0;
    $cont = 0;
    foreach ($numeros as $key => $num) {
        if ($num > 0) {
            $soma += $num;
        } else {
            $cont ++;
        }
    }
    echo 'Soma dos números positivos = ' . $soma . PHP_EOL . 'Total de números negativos = ' . $cont . PHP_EOL;
?>