<?php 
$callback = function($fullname)
{
    $name = explode(' ', $fullname);
    if ($name < 2) {
        return $name[0];
    } else {
        return $name[0] . ' ' . $name[1]; 
    }
};
function frase($nome, $callback)
{
    return 'Meu nome é ' . $callback($nome) . ', e isso aqui até parece JavaScript!';
}

echo frase('Fugiro Nakombi Azul', $callback);