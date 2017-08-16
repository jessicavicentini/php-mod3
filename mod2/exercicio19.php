<?php
$names = ['Fugiro', 'Cagaro', 'Fulano', 'Cicrano', 'People'];
$greeting = 'Olá ' ;

$callback = function($name) USE ($greeting)
{
    return $greeting . strtoupper($name);
};
function my_array_map($names,$callback)
{
    return array_map($callback,$names);
}
var_dump(my_array_map($names, $callback));