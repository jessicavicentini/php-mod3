<?php
require_once __DIR__ . '/../conexao.php';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}

$deletIdReader = $_GET['deletIdReader'];
$leitorComLivro = '
    SELECT l.returned_at, l.canceled_at
    FROM readers AS r 
    INNER JOIN 
    loans AS l ON l.reader_id = r.id 
    WHERE 
    r.id = ' . $deletIdReader. '
';
$proibidoExcluir = 0;
$resultadoLeitorComLivro = mysqli_query($conexao, $leitorComLivro);
while ($confereLeitorComLivro = mysqli_fetch_array($resultadoLeitorComLivro, MYSQLI_ASSOC)) {
    if ($confereLeitorComLivro['returned_at'] == null && $confereLeitorComLivro['canceled_at'] == null) {
            $proibidoExcluir++;
    }
}
if ($proibidoExcluir == 0) {
    $deletarLeitorDoEmprestimo = '
        DELETE FROM loans WHERE reader_id = ' . $deletIdReader. '
    ';
    $resultadoDeletarLeitorDoEmprestimo = mysqli_query($conexao, $deletarLeitorDoEmprestimo);
    $deletarLeitor = '
        DELETE FROM readers WHERE id = ' . $deletIdReader . '
    ';
    $resultadoDeletarLeitor = mysqli_query($conexao, $deletarLeitor);
    header("Location: leitores.php");
    exit;
} else {
        echo '<h2>Não foi possível excluir!<br>O leitor possui empréstimos ativos.</h2>';
}


