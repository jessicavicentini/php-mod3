<?php
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>
    <br><br>
    <form method="post" action="editBook.php">
        <table border="0">
            <tr> 
                <td>Id Editora</td>
                <td><input type="text" name="newIdEditora"></td>
            </tr>
            <tr> 
                <td>Título</td>
                <td><input type="text" name="newTitulo"></td>
            </tr>
            <tr> 
                <td>Descrição</td>
                <td><input type="text" name="newDescricao"></td>
            </tr>
            <tr> 
                <td>ISBN</td>
                <td><input type="text" name="newIsbn"></td>
            </tr>
            <tr>
                <td><button type="submit" name="editIdLivro" value="<?php echo $_GET['editIdLivro']; ?>">Enviar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
require_once __DIR__ . "/../conexao.php";
if (!empty($_POST['newIdEditora']) && !empty($_POST['newTitulo']) && !empty($_POST['newDescricao']) && !empty($_POST['newIsbn'])) {
 
    $editedId = $_POST['editIdLivro'];
    $newIdEditora = $_POST['newIdEditora'];
    $newTitulo = $_POST['newTitulo'];
    $newDescricao = $_POST['newDescricao'];
    $newIsbn = $_POST['newIsbn'];
    $editarLivro = '
        UPDATE books SET name = \'' . $newIdEditora . '\', title = \'' . $newTitulo . '\', description = \'' . $newDescricao . '\', 
         isbn = \'' . $newDescricao . '\'
         WHERE id = \'' . $newIsbn . '\'
    ';
    $resultadoEditarLivro = mysqli_query($conexao, $editarLivro);
    if (!$resultadoEditarLivro) {
        echo 'Ocorreu um erro ao editar o livro';
    } else {
        echo 'Livro editado com sucesso';
    }
} else if ($_POST) {
    echo 'Preencha todos os campos';
}

?>
