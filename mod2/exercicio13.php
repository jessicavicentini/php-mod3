<?php
$fn = function()
{
    return 'Hoje é dia ' . date('d-m-Y');
};
echo $fn() . PHP_EOL;