<?php
require __DIR__ . ('/arrays.php');

echo 'a)' . PHP_EOL;

sort($labStack);
foreach ($labStack as $value) {
    echo $value . PHP_EOL;
}       

echo PHP_EOL . 'b)' . PHP_EOL;
array_push($labStack, 'Java', 'Swift', 'Python');
arsort($labStack);
foreach($labStack as $value){
    echo $value . PHP_EOL;
}

echo PHP_EOL . 'c)' . PHP_EOL;
unset($labStack[1], $labStack[2], $labStack[3], $labStack[5], $labStack[6], $labStack[8]);
foreach($labStack as $value){
    echo $value . PHP_EOL;
}


echo PHP_EOL . 'd)' . PHP_EOL;

foreach ($labStack as $value) {
    $var = substr($value, 0, 1);
    if($var == 'R'){
        echo $value . PHP_EOL;
    }
}
