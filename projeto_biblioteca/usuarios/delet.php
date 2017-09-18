<?php
require_once __DIR__ . '/../conexao.php';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
$id = $_GET['id'];
$deletarUsuario = '
    DELETE FROM users WHERE id = ' . $id . '
';
$resultadoDeletarUsuario = mysqli_query($conexao, $deletarUsuario);
header("Location: usuarios.php");
exit;
