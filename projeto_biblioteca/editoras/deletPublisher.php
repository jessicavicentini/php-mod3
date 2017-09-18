<?php
require_once __DIR__ . '/../conexao.php';
require_once __DIR__ . '/../session.php';
 if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
$deletIdPublisher = $_GET['deletIdPublisher'];
$editoraPossuiLivro = '
    SELECT COUNT(id) AS qtdLivros 
    FROM books
    WHERE publisher_id = ' . $deletIdPublisher . '
';
$resultadoEditoraPossuiLivro = mysqli_query($conexao, $editoraPossuiLivro);
$auxiliarEditoraPossuiLivro = mysqli_fetch_array($resultadoEditoraPossuiLivro, MYSQLI_ASSOC);
$qtdLivrosPorEditora = $auxiliarEditoraPossuiLivro['qtdLivros'];

if ($qtdLivrosPorEditora == 0) {
$deletarEditora = '
    DELETE FROM publishers WHERE id = ' . $deletIdPublisher . '
';
$resultadoDeletarEditora = mysqli_query($conexao, $deletarEditora);
header("Location: editoras.php");
exit;
} else {
    echo '<h4>Não foi possivel excluir!<br>A editora possui livros cadastrados';
}


