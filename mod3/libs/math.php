<?php

function soma($num)
{
    for ($i = 0, $total = 0; $i < count($num); $i++) { 
        $total +=  $num[$i]; 
    } 
    return 'Soma: ' . $total; 
}

function subtracao($num) 
{
    for($i = 3, $total = $num[2]; $i < count($num); $i++) {
       $total -= $num[$i] . PHP_EOL;
    }
    return 'Subtração: ' . $total;
} 


function multiplicacao($num)
{
    for ($i = 2, $total = 1; $i < count($num) ; $i++) { 
        $total *= $num[$i];
    }
    return 'Multiplicação: ' . $total;
}

function divisao($num)
{
    return 'Divisao:' . $num[2] / $num[3];
}
