<?php
$operador = $argv[1];
$num = $argv;

require __DIR__ . ('/math.php');

if($operador == '+') {
    echo soma($num) . PHP_EOL;
} elseif ($operador == '-') {
    echo subtracao($num) . PHP_EOL;
} elseif ($operador == '*') {
    echo multiplicacao($num) . PHP_EOL;
} elseif ($operador == '/') {
    echo divisao($num) . PHP_EOL;
} else {
    echo 'Digite um operador valido.' . PHP_EOL;
}