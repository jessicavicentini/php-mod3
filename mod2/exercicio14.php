<?php
$names = ['Fugiro', 'Cagaro', 'Fulano', 'Cicrano', 'People'];
function toUpper($name)
{
    return strtoupper($name);
}
var_dump(array_map("toUpper", $names));