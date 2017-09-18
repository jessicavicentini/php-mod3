<?php

$endereco = 'banco.dev.tray.intranet';
$usuario  = 'tray';
$senha    = 'tray77';
$banco    = 'labs2';

$conexao = mysqli_connect($endereco, $usuario, $senha, $banco);

if (mysqli_connect_errno()) {
    echo 'Ocorreu um erro ao conectar-se com o banco: ' . mysqli_connect_error();
    exit;
}