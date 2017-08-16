<?php 
$names = ['Fugiro', 'Cagaro', 'Fulano', 'Cicrano', 'People'];

$toUpper = function($name)
{
    return strtoupper($name);
};
var_dump (array_map($toUpper, $names));
