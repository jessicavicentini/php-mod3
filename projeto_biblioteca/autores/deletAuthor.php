<?php
require_once __DIR__ . '/../conexao.php';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
$deletIdAuthor = $_GET['deletIdAuthor'];
$autorPossuiLivro = '
    SELECT COUNT(id) AS qtdLivros 
    FROM book_authors
    WHERE author_id = ' . $deletIdAuthor . '
';
$resultadoAutorPossuiLivro = mysqli_query($conexao, $autorPossuiLivro);
$auxiliarAutorPossuiLivro = mysqli_fetch_array($resultadoAutorPossuiLivro, MYSQLI_ASSOC);
$qtdLivrosPorAutor = $auxiliarAutorPossuiLivro['qtdLivros'];
if ($qtdLivrosPorAutor == 0) {
    $deletarAutor = '
        DELETE FROM authors WHERE id = ' . $deletIdAuthor . '
    ';
    $resultadoDeletarAutor = mysqli_query($conexao, $deletarAutor);
    header("Location: autores.php");
    exit;
} else {
    echo '<h4>Não foi possivel excluir!<br>O autor possui livros cadastrados';
}


