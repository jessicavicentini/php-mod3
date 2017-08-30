<?php
require __DIR__ . ('/arrays.php');

echo 'a)' . PHP_EOL;
sort($labStack);
foreach ($labStack as $valueA) {
    echo $valueA . PHP_EOL;
}       

echo PHP_EOL . 'b)' . PHP_EOL;
array_push($labStack, 'Java', 'Swift', 'Python');
arsort($labStack);
foreach($labStack as $valueB){
    echo $valueB . PHP_EOL;
}

echo PHP_EOL . 'c)' . PHP_EOL;
$labStackCopy = $labStack;
unset($labStackCopy[1], $labStackCopy[2], $labStackCopy[3], $labStackCopy[4],$labStackCopy[5], $labStackCopy[6], $labStackCopy[8]);
foreach($labStackCopy as $valueC){
    echo $valueC . PHP_EOL;
}

echo PHP_EOL . 'd)' . PHP_EOL;
foreach ($labStack as $valueD) {
    $var = substr($valueD, 0, 1);
    if($var == 'R'){
        echo $valueD . PHP_EOL;
    }
}
