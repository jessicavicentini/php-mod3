<?php

require __DIR__ . ('/../config/config.php');
require __DIR__ . ('/date.php');

echo 'Meu nome é ' . name() . ', e desde que eu fui contratada eu realizei a limpeza do Labs ' . diaSemana(data(), date('Y-m-d'), dia()) . ' vezes.' . PHP_EOL; 