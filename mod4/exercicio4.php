<?php 
require __DIR__ . ('/arrays.php');

echo 'a)' . PHP_EOL;
foreach ($trainees as $valueA) {
    $aux[$valueA['name'] . ' --> ' . $valueA['nickname']] = $valueA['started_at'];
}
asort($aux);
foreach ($aux as $nameA => $dataA) {
    echo $nameA . ', data de admissão: ' . $dataA . PHP_EOL;
}

echo PHP_EOL . 'b)' . PHP_EOL;
foreach ($trainees as $valueB) {
    $aux2[$valueB['name']] = $valueB['started_at'];
}
asort($aux2);
foreach ($aux2 as $nameB => $dataB) {
    $diferenca = strtotime(date('Y-m-d')) - strtotime($dataB) . PHP_EOL;
    $dias = $diferenca/(86400);
    echo 'Nome ' . $nameB . ': ' . $dias . ' dias de empresa' . PHP_EOL;
}

echo PHP_EOL . 'c)' . PHP_EOL;
echo 'Estagiarios que sabem Ruby:' . PHP_EOL;
foreach ($trainees as $valueC) {
    $skills = ($valueC['skills']);
    foreach ($skills as $skillName) {
        if ($skillName == 'Ruby') {
            echo $valueC['name'] . PHP_EOL;
        }
    }
}

echo PHP_EOL . 'd)' . PHP_EOL;
$cont = 0;
foreach ($trainees as $valueD) {
    $skills = ($valueD['skills']);
    foreach ($skills as $skillName) {
        $cont++;
    }
        echo $valueD['name'] . ', habilidades: ' . $cont . PHP_EOL;
        $cont=0;
}

echo PHP_EOL . 'e)' . PHP_EOL;
foreach ($trainees as $valueE) {
   $anoNascimento = date('Y-m-d') - $valueE['age'];
   echo $valueE['name'] . ' --> '. $anoNascimento . PHP_EOL;
}


echo PHP_EOL . 'f)' . PHP_EOL . 'Estagiarios com mais de 19 anos' . PHP_EOL;
foreach ($trainees as $keF => $valueF) {
    if ($valueF['age'] > 19) {
        echo $valueF['name'] . PHP_EOL;
    }
}
echo PHP_EOL . 'g)' . PHP_EOL;
$allSkills = [
    'css' => 0,
    'php' => 0,
    'html' => 0,
    'sql' => 0,
    'pwa' => 0,
    'ruby' => 0,
    'javaScript' => 0,
    'laravel' => 0,
    'serviceWorker' => 0,
    'rubyOnRails' => 0,
    'vue' => 0,
];
foreach ($trainees as $keyG => $valueG) {
    $skillsG = $valueG['skills'];
    foreach ($skillsG as $skillNameG) {
        if ($skillNameG == 'CSS') {
            $allSkills['css']++ . PHP_EOL;
        } 
        if ($skillNameG == 'PHP') {
            $allSkills['php']++ . PHP_EOL;
        } 
        if ($skillNameG == 'HTML' || $skillNameG == 'Html') {
            $allSkills['html']++ . PHP_EOL;
        } 
        if ($skillNameG == 'SQL') {
            $allSkills['sql']++ . PHP_EOL;
        } 
        if ($skillNameG == 'PWA') {
           $allSkills['pwa']++ . PHP_EOL;
        } 
        if ($skillNameG == 'Ruby') {
            $allSkills['ruby']++ . PHP_EOL;
        } 
        if ($skillNameG == 'Javascript' || $skillNameG == 'JavaScript') {
            $allSkills['javaScript']++ . PHP_EOL;
        } 
        if ($skillNameG == 'Laravel') {
            $allSkills['laravel']++ . PHP_EOL;
        } 
        if ($skillNameG == 'ServiceWorker') {
            $allSkills['serviceWorker']++ . PHP_EOL;
        } 
        if ($skillNameG == 'Ruby on Rails') {
            $allSkills['rubyOnRails']++ . PHP_EOL;
        } 
        if ($skillNameG == 'Vue') {
            $allSkills['vue']++ . PHP_EOL;
        } 
    }
}
arsort($allSkills);
foreach ($allSkills as $nameSkill => $skkil) {
    echo $nameSkill . ' -> ' . $skkil . PHP_EOL;
}

