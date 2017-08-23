<?php
    if (!isset($argv[1]) || !isset($argv[2]) || !isset($argv[3])  ) { 
        echo 'Digite seu nome, sexo (F ou M) e idade';
        exit;
    }
        $name = $argv[1];
        $sexo = $argv[2];
        $age = $argv[3];

        if ((($sexo == 'F') || ($sexo == 'f')) && ($age < 25)) {
            echo $name . ' ACEITA' . PHP_EOL;
        } else {
            echo $name . ' REJEITADA' . PHP_EOL;
        }
  
?>