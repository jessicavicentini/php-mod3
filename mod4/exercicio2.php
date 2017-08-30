<?php
require __DIR__ . ('/arrays.php');

echo 'a)' . PHP_EOL;
$city = max($cities);
foreach ($cities as $key => $value) {
    if ($value == $city) {
        echo 'Cidade mais populosa: ' . $key . ' --> '.   $value . ' habitantes' .PHP_EOL;
    }
}

echo PHP_EOL . 'b)' . PHP_EOL;
$city = min($cities);
 foreach ($cities as $key => $value) {
    if ($value == $city) {
        echo 'Cidade menos populosa: ' . $key . ' --> '.   $value . ' habitantes' .PHP_EOL;
    }
}

echo PHP_EOL . 'c)' . PHP_EOL;
foreach($cities as $key => $value){
    if ($value < 100000) {
        unset($cities[$key]);
    }
}
foreach($cities as $key => $value) {
     echo $key . ' --> ' . $value . ' habitantes.' . PHP_EOL;
}

echo PHP_EOL . 'd)' . PHP_EOL;
$cidade1 = ['Ribeirão Preto' => 123452];
$cidade2 = ['Dirceu' => 120402];
$cidade3 = ['Agudos' => 45009];
$cities += ($cidade1 + $cidade2 + $cidade3);
asort($cities);
foreach ($cities as $key => $value) {
    echo $key . ' --> ' . $value . PHP_EOL;
}

echo PHP_EOL . 'e)' . PHP_EOL;
ksort($cities);
foreach ($cities as $key => $value) {
    echo $key . ' --> ' . $value . PHP_EOL;
}