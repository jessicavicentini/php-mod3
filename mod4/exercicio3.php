<?php
require __DIR__ . ('/arrays.php');

echo 'a)' . PHP_EOL;
foreach ($comics as $key => $value) {
    echo 'Prdutora: ' . $key . ', ano de fundação: ' . $value['founded_at'];
    echo PHP_EOL;
}

echo PHP_EOL . 'b)' . PHP_EOL;
foreach ($comics as $key => $value) {
    $fundadores = $value['founder']['name'];
    $nascimento = $value['founder']['born_at'];
    $morte = $value['founder']['passed_at'];
    sort($value);
    if (isset($morte)) {
        $idade = $morte - $nascimento;
    } else {
        $idade = 0;
    }
    echo 'Nome: ' . $fundadores . '   Idade de falecimento: ' . $idade .  PHP_EOL;
}

echo PHP_EOL . 'c)' . PHP_EOL;

foreach ($comics as $indice => $value) {
    $personagens = $value['characters'];
    if ($indice == 'DC') {            $qtdDC = count($personagens);
    } else if ($indice == 'Marvel') {
        $qtdMarvel = count($personagens);
    } else {
        $qtdDark = count($personagens);
    }
}
if(($qtdDC > $qtdMarvel) && ($qtdDC > $qtdDark)) {
    if($qtdMarvel > $qtdDark) {
        echo 'A DC possui ' . ($qtdDC - $qtdMarvel) . ' personagens a mais que a Marvel';
    } else {
        echo 'A DC possui ' . ($qtdDC - $qtdMarvel) . ' personagens a mais que a Dark Horse Comics';
    }
} else if ($qtdMarvel > $qtdDC && $qtdMarvel > $qtdDark) {
    if ($qtdDC > $qtdDark) {
        echo 'A Marvel possui ' . ($qtdMarvel - $qtdDC) . ' personagens a mais que a DC';
    } else {
        echo 'A Marvel possui ' . ($qtdMarvel - $qtdDark) . ' personagens a mais que a Dark Horse Comics';
    }
} else {
    if ($qtdDC > $qtdMarvel) {
        echo 'A Dark Horse Comics possui ' . ($qtdDark - $qtdDC) . ' personagens a mais que a DC';
    } else {
        echo 'A Dark Horse Comics possui ' . ($qtdDark - $qtdMarvel) . ' personagens a mais que a Dark Horse Comics';
    }
}
    echo PHP_EOL;

echo PHP_EOL . 'd)' . PHP_EOL;
foreach ($comics as $key => $value) {
    $personagens = $value['characters'];
    foreach ($personagens as $name) {
        $charactersNames[] = ($name . ' --> ' . $key);
    }
}
sort($charactersNames);
foreach ($charactersNames as $key2 => $value2) {
    echo $value2 . PHP_EOL;
}
echo PHP_EOL . 'e)' . PHP_EOL;

$yearDc = $comics['DC']['founded_at'];
$yearMarvel = $comics['Marvel']['founded_at'];
$yearDark = $comics['Dark Horse Comics']['founded_at'];

if (($yearDc < $yearMarvel) && ($yearDc < $yearDark)) {
    echo 'A DC é a produtora mais antiga e possui ' . (2017 - $yearDc) . ' anos.' . PHP_EOL;
} else if (($yearMarvel < $yearDc) && ($yearMarvel < $yearDark)) {
    echo 'A Marvel é a produtora mais antiga e possui ' . (2017 - $yearMarvel) . ' anos.' . PHP_EOL;
} else {
    echo 'A Dark Horse Comics é a produtora mais antiga e possui ' . (2017 - $yearDark) . ' anos.' . PHP_EOL;
}

echo PHP_EOL . 'f)' . PHP_EOL;
$yearDc = $comics['DC']['founded_at'];
$yearMarvel = $comics['Marvel']['founded_at'];
$yearDark = $comics['Dark Horse Comics']['founded_at'];

if (($yearDc > $yearMarvel) && ($yearDc > $yearDark)) {
    echo 'A DC é a produtora mais recente e possui ' . (2017 - $yearDc) . ' anos.' . PHP_EOL;
} else if (($yearMarvel > $yearDc) && ($yearMarvel > $yearDark)) {
    echo 'A Marvel é a produtora mais recente e possui ' . (2017 - $yearMarvel) . ' anos.' . PHP_EOL;
} else {
    echo 'A Dark Horse Comics é a produtora mais recente e possui ' . (2017 - $yearDark) . ' anos.' . PHP_EOL;
}

echo PHP_EOL . 'g)' . PHP_EOL;

foreach ($comics as $key => $value) {
    echo $value['founder']['name'] . ' tinha '. ($value['founded_at'] - $value['founder']['born_at']) . ' anos quando fundou a ' . $key . PHP_EOL;
}

