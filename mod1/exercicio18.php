<?php
    $vetor1 = [1, 2, 5, 6, 4, 3, 7, 12, 10, 15];
    $vetor2 = [1, 13, 3, 24, 6, 8, 56, 34, 10, 55];
    $vetorNaoComum = [];
    $vetorComum = [];

    foreach ($vetor1 as $v1) {
        $cont = 0;
        $cont2 = 0;
        foreach ($vetor2 as $v2) {
            if ($v1 == $v2) {
                $cont++;
                $vetorComum[] = $v1;
            }
        }
        if ($cont == 0) {
            $vetorNaoComum[ ] = $v1;
        }
    }
    foreach ($vetor2 as $v2) {
        $cont = 0;
        foreach ($vetor1 as $v1) {
            if ($v2 == $v1) {
                $cont++;
            }
        }
        if ($cont == 0) {
            $vetorNaoComum[] = $v2;
        }
    }
    echo 'Vetor dos numeros não comuns: ' . PHP_EOL;
    foreach ($vetorNaoComum as  $vnc) {
        echo $vnc . ' ' ;
    }
     echo PHP_EOL . PHP_EOL . 'Vetor dos numeros comuns: ' . PHP_EOL;
    foreach ($vetorComum as  $vc) {
        echo $vc . ' ' ;
    }
    echo PHP_EOL;
 
    

?>