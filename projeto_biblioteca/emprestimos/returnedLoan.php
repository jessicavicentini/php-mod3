<?php
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
 if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
echo '<br>';
require_once __DIR__ . "/../conexao.php";

$returnedIdLoan = $_POST['returnedIdLoan'];
$confereCancelado = '
    SELECT canceled_at FROM loans WHERE id = \'' . $returnedIdLoan . '\'
';
$resultadoConfereCancelado = mysqli_query($conexao, $confereCancelado);
    $existeCancelado = mysqli_fetch_array($resultadoConfereCancelado, MYSQLI_ASSOC)['canceled_at'];
if($existeCancelado == null) {
   
        $returnedIdLoan = $_POST['returnedIdLoan'];
        $returnedDate = date('Y-m-d H-i-s');
        $editarDevolucao = '
            UPDATE loans SET returned_at = \'' . $returnedDate . '\'
            WHERE id = \'' . $returnedIdLoan . '\'
        ';
        $resultadoEditarDevolucao = mysqli_query($conexao, $editarDevolucao);
        echo '<br>Livro devolvido com sucesso';

} else {
    echo 'O empréstimo já foi cancelado';
}
?>
