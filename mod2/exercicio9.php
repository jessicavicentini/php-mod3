<?php 
$numeros = ['3', '4', '12', '21', '43', '23', '56', '54', '7', '13'];

function primo($num)
{
    for ($i = 2, $cont = 0; $i <= sqrt($num) ; $i++) { 
        if($num % $i == 0) {
            $cont++;  
            break; 
        }

    }
    if( $cont == 0 ){
        return $num . ' primo';
    } else {
        return $num . ' não primo';
    } 
} 
$newarray = array_map("primo", $numeros);
var_dump($newarray);