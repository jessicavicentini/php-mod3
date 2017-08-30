<?php
require __DIR__ . ('/arrays.php');

echo 'a)' . PHP_EOL;
foreach ($comics as $keyA => $valueA) {
    echo 'Prdutora: ' . $keyA . ', ano de fundação: ' . $valueA['founded_at'];
    echo PHP_EOL;
}

echo PHP_EOL . 'b)' . PHP_EOL;
foreach ($comics as $keyB => $valueB) {
    $fundadores = $valueB['founder']['name'];
    $nascimento = $valueB['founder']['born_at'];
    $morte = $valueB['founder']['passed_at'];
    if (isset($morte)) {
        $idade[$fundadores] = $morte - $nascimento;
    } else {
        $idade[$fundadores] = 0;
    }
}
asort($idade);
foreach ($idade as $nomeFundador => $numB) {
    echo 'Nome: ' . $nomeFundador . '   Idade de falecimento: ' . $numB . PHP_EOL;
}

echo PHP_EOL . 'c)' . PHP_EOL;
foreach ($comics as $keyC => $valueC) {
    $personagensC = $valueC['characters'];
    if ($keyC == 'DC') {            $qtdDC = count($personagensC);
    } else if ($keyC == 'Marvel') {
        $qtdMarvel = count($personagensC);
    } else {
        $qtdDark = count($personagensC);
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
        echo 'A Dark Horse Comics possui ' . ($qtdDark - $qtdDC) . ' personagens a mais que a DC' . PHP_EOL;
    } else {
        echo 'A Dark Horse Comics possui ' . ($qtdDark - $qtdMarvel) . ' personagens a mais que a Dark Horse Comics' . PHP_EOL;
    }
}

echo PHP_EOL . PHP_EOL . 'd)' . PHP_EOL;
foreach ($comics as $keyD => $valueD) {
    $personagensD = $valueD['characters'];
    foreach ($personagensD as $nameD) {
        $charactersNames[] = ($nameD . ' --> ' . $keyD);
    }
}
sort($charactersNames);
foreach ($charactersNames as $keyD2 => $valueD2) {
    echo $valueD2 . PHP_EOL;
}
echo PHP_EOL . 'e)' . PHP_EOL;

$yearDcE = $comics['DC']['founded_at'];
$yearMarvelE = $comics['Marvel']['founded_at'];
$yearDarkE = $comics['Dark Horse Comics']['founded_at'];

if (($yearDcE < $yearMarvelE) && ($yearDcE < $yearDarkE)) {
    echo 'A DC é a produtora mais antiga e possui ' . (2017 - $yearDcE) . ' anos.' . PHP_EOL;
} else if (($yearMarvelE < $yearDcE) && ($yearMarvelE < $yearDarkE)) {
    echo 'A Marvel é a produtora mais antiga e possui ' . (2017 - $yearMarvelE) . ' anos.' . PHP_EOL;
} else {
    echo 'A Dark Horse Comics é a produtora mais antiga e possui ' . (2017 - $yearDarkE) . ' anos.' . PHP_EOL;
}

echo PHP_EOL . 'f)' . PHP_EOL;
$yearDcF = $comics['DC']['founded_at'];
$yearMarvelF = $comics['Marvel']['founded_at'];
$yearDarkF = $comics['Dark Horse Comics']['founded_at'];

if (($yearDcF > $yearMarvelF) && ($yearDcF > $yearDarkF)) {
    echo 'A DC é a produtora mais recente e possui ' . (2017 - $yearDc) . ' anos.' . PHP_EOL;
} else if (($yearMarvelF > $yearDcF) && ($yearMarvelF > $yearDarkF)) {
    echo 'A Marvel é a produtora mais recente e possui ' . (2017 - $yearMarvelF) . ' anos.' . PHP_EOL;
} else {
    echo 'A Dark Horse Comics é a produtora mais recente e possui ' . (2017 - $yearDarkF) . ' anos.' . PHP_EOL;
}

echo PHP_EOL . 'g)' . PHP_EOL;
foreach ($comics as $keyG => $valueG) {
    echo $valueG['founder']['name'] . ' tinha '. ($valueG['founded_at'] - $valueG['founder']['born_at']) . ' anos quando fundou a ' . $keyG . PHP_EOL;
}

