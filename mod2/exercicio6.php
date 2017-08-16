<?php 
function ocorrencias($str, $letra)
{
    for($cont=0, $i=0; $i < strlen($str); $i++){
        if($str[$i] == $letra)
            $cont++;
    }
    return 'Numero de ocorrencias ' . $cont;
}
echo ocorrencias('arara', 'a') . PHP_EOL;