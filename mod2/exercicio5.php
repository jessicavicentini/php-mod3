<?php 
function palindromo($str)
{
    $rts = strrev($str);
	if(strcmp($str, $rts) == 0)
		return("É palindromo!");
	else
		return("Não é palindromo");	
}
echo palindromo('arara') . PHP_EOL;
