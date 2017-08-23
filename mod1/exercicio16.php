<?php
    $numeros = [2, 3, 4, 5, 7, 6, 8, 12, 13, 15, 16, 23, 24, 45, 33];

    foreach ($numeros as $key => $num) {
        if ($num %2 == 0) {
            echo $num . ' --> Par'. PHP_EOL;
        } else {
            echo $num . ' --> Ímpar'. PHP_EOL;
        }
    }
?>