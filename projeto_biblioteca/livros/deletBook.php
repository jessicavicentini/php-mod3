<?php
require_once __DIR__ . '/../conexao.php';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
$deletIdLivro = $_GET['deletIdLivro'];
$livroDisponivel = '
    SELECT l.returned_at, l.canceled_at 
    FROM books AS b
    INNER JOIN 
    loans AS l ON l.book_id = b.id
    WHERE 
    b.id = \'' . $deletIdLivro . '\' 

';
$proibidoExluir = 0;
$resultadoLivroDisponivel = mysqli_query($conexao, $livroDisponivel);
while ($confereDevolvido = mysqli_fetch_array($resultadoLivroDisponivel, MYSQLI_ASSOC)){
    if ($confereDevolvido['returned_at'] == null && $confereDevolvido['canceled_at'] == null) {
        $proibidoExluir++;
    }
}

if($proibidoExluir == 0) {
    $deletarAutorLivro = '
        DELETE FROM book_authors WHERE book_id = ' . $deletIdLivro . '
    '; 
    $resultadoDeletarAutorLivro = mysqli_query($conexao, $deletarAutorLivro);
    $deletarEmprestimoDoLivro = '
        DELETE FROM loans WHERE book_id = ' . $deletIdLivro . '
    ';
    $resultadoDeletarEmprestimoDoLivro = mysqli_query($conexao, $deletarEmprestimoDoLivro);
    $deletarLivro = '
        DELETE FROM books WHERE id = ' . $deletIdLivro . '
    ';
    $resultadoDeletarLivro = mysqli_query($conexao, $deletarLivro);
    header("Location: livros.php");
    exit;
} else {
    echo '<h2>Não foi possível excluir!<br>O título se encontra emprestado.</h2>';
}