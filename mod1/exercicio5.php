<?php 
    if (!isset($argv[1]) || !isset($argv[2]) || !isset($argv[3])) {
        echo "Digite as medidas dos lados dos triângulos corretamente";
        exit;
    }
    $a = $argv[1];
    $b = $argv[2];
    $c = $argv[3];      
    if ((!(abs($a - $b) < $a) && ($a < ($b + $c))) || !((abs($a - $c) < $b) 
        && ($b < ($a + $b))) || !((abs($a - $b) < $c) || ($c<($a+$b)))) {
        echo "Não é um triângulo" . PHP_EOL;
        exit;
    } 
    if (($a == $b) && ($b == $c)) {
        echo 'É um triângulo equilatero' . PHP_EOL;
    } elseif (($a == $b) || ($a == $c) || ($b == $c)) {
         echo "É um triângulo isosceles" . PHP_EOL;
    } else {
        echo "É um triângulo escaleno" . PHP_EOL;
    }  

?>