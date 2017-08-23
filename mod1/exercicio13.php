<?php
	 $numeros = [100, 4, 56, 300, 125, 234, 175, 45, 89, 200, 192];
     $cont = 0;
     foreach ($numeros as $key => $num) {
         if ($num >=100 && $num <=200) {
             $cont++;
         }
     }
     echo $cont . ' números estao entre 100 e 200.'. PHP_EOL;
?>