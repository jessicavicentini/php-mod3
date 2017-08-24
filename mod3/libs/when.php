<?php
require __DIR__ . ('/date.php');
echo 'Hoje é ' . dataHoje() . ', ontem foi ' . dataOntem() . ', amãnha será ' . 
dataAmanha() . '. Se eu salvar isso no banco, os valores serão ' . dataBanco() . PHP_EOL;