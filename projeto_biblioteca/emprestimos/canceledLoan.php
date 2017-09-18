<?php
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
 if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
require_once __DIR__ . "/../conexao.php";
$canceledIdLoan = $_POST['canceledIdLoan'];
$confereDevolvido = '
    SELECT returned_at FROM loans WHERE id = \'' . $canceledIdLoan . '\'
';
$resultadoConfereDevolvido = mysqli_query($conexao, $confereDevolvido);
    $existeDevolvido = mysqli_fetch_array($resultadoConfereDevolvido, MYSQLI_ASSOC)['returned_at'];
if($existeDevolvido == null) {
    $canceledDate = date('Y-m-d H-i-s');
    $editarCancelamento = '
        UPDATE loans SET canceled_at = \'' . $canceledDate . '\'
         WHERE id = \'' . $canceledIdLoan . '\'
    ';
    $resultadoEditarCancelamento = mysqli_query($conexao, $editarCancelamento);
    echo "<br>Empréstimo cancelado com sucesso";
 
} else {
    echo 'O livro ja foi devolvido';
}

?>
