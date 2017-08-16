<?php 
function recepcao($usuario = "visitante")
{
    return 'Bem vindo(a), ' . $usuario . '!';
}
echo recepcao() . PHP_EOL; 