<?php 
function fatorial($num)
{
    if($num > 30) {
        return 'null';
    } else {
        for( $aux = $num, $fatorial = 1; $num > 0; $num--) {
            $fatorial*=$num;
        }
    }
        return 'O fatorial de ' . $aux . ' é ' . $fatorial;
}
echo fatorial('5') . PHP_EOL;
