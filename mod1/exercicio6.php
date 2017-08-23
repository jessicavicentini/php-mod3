<?php 
    if ((!isset($argv[1])) || !(($argv[1] > 0) && ($argv[1] < 13)) ) {
         echo "Não existe mes com esse número." . PHP_EOL;
         exit;
    }
    $num = $argv[1]; 

    $meses = array('Janeiro', 'Fevereiro', 'Marco', 'Abril',  'Maio',  'Junho', 
       		'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
    echo "Mês -->" . $meses[$num - 1] . PHP_EOL;
    
      
?>