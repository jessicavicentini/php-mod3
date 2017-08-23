<?php
     $matriz = [
        [10,20,30,40,50],
        [60,70,80,90,10],
        [11,12,13,14,15],
        [16,17,18,19,20],
        [21,22,23,24,25],
    ];
    echo 'Matriz:' . PHP_EOL;
    for ($i=0; $i < 5 ; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            echo $matriz[$i][$j] . ' ';
        }
        echo PHP_EOL;
    }
    echo PHP_EOL. PHP_EOL . 'Matriz dos números pares:' . PHP_EOL;
    for ($i=0; $i < 5 ; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            if ($matriz[$i][$j] % 2 == 0) {
                echo $matriz[$i][$j] . ' ';
            } else {
                echo ' ';
            }
        }
        echo PHP_EOL;
    }
    echo PHP_EOL. PHP_EOL . 'Matriz dos números Ímpares:' . PHP_EOL;
     for ($i=0; $i < 5 ; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            if ($matriz[$i][$j] % 2 != 0) {
                echo $matriz[$i][$j] . ' ';
            } else {
                echo ' ';
            }
        }
        echo PHP_EOL;
    }
?>