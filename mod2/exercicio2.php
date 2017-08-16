<?php 
$estagiarios = [ 
    ['nome' => 'Joao', 'idade' => '18'], 
    ['nome' => 'José', 'idade' => '19'], 
    ['nome' => 'Fugiro', 'idade' => '19'], 
    ['nome' => 'Cagaro','idade' => '20'], 
    ['nome' => 'Fulano', 'idade' => '21'],
];

function caixaAuta($nome)
{
    return strtoupper($nome);
}

foreach ($estagiarios as $key => $estagiario) {
    echo caixaAuta($estagiarios[$key]['nome']) . ' Idade: ' . $estagiarios[$key]['idade'] . PHP_EOL;
}

