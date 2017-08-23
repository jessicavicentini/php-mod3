<?php
    $vetor = [12, 14, 23, 34, 54, 76, 25, 56, 87, 65, 44, 93, 82, 22, 13, 83, 96, 47, 64, 33];

    $maior = $menor = $vetor[0];
    $total = $perc = 0;
    foreach ($vetor as $key => $num) {
        $total += $num;
        if ($num%2 == 0) {
            $perc += 5;
        }
        if ($maior < $num) {
            $maior = $num;
        } elseif ($menor > $num) {
            $menor = $num;
        }
    }
    echo 'Maior número: ' . $maior . PHP_EOL . 'Menor valor: ' . $menor . PHP_EOL . 'Percentual de números pares: ' . $perc . '%' .
          PHP_EOL . 'Média dos elementos do vetor: ' . ($total/20) . PHP_EOL;
?>