<?php
require_once __DIR__ . '/template.html';
require_once __DIR__ . '/session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
</head>
<body>
    <h1>Bem vindo a página principal.</h1>
</body>
</html>