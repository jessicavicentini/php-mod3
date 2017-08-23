<?php
    for ($massa=1, $temp=0; $massa>0.10 ; $massa-=0.25, $temp+=30) { 
   echo $massa .' '. $temp.PHP_EOL;
    }
        echo 'Tempo necessário para a massa ser menor que 0.10: ' . ($temp/60) . ' min' . PHP_EOL;
?>