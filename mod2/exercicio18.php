<?php
$names = ['Fugiro', 'Cagaro', 'Fulano', 'Cicrano', 'People'];

$callback = function($name) 
{
    return strtoupper($name);
};
function my_array_map($names,$callback)
{
    return array_map($callback,$names);
}
var_dump(my_array_map($names, $callback));