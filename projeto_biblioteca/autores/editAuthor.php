<?php


require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
 if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

    <br><br>
    <form method="post" action="editAuthor.php">
        <table border="0">
            <tr> 
                <td>Nome</td>
                <td><input type="text" name="newNameAuthor"></td>
            </tr>
            <tr>
                <td><button type="submit" name="editIdAuthor" value="<?php echo $_GET['editIdAuthor']; ?>">Enviar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
require_once __DIR__ . "/../conexao.php";
if (!empty($_POST['newNameAuthor'])) {
 
    $editedIdAuthor = $_POST['editIdAuthor'];
    $newNameAuthor = $_POST['newNameAuthor'];
    $editarAutor = '
        UPDATE authors SET name = \'' . $newNameAuthor . '\'
         WHERE id = \'' . $editedIdAuthor . '\'
    ';
    $resultadoEditarAutor = mysqli_query($conexao, $editarAutor);
     if (!$resultadoEditarAutor) {
        echo 'Ocorreu um erro ao editar o autor';
    } else {
        echo 'Autor editado com sucesso';
    }
} else if ($_POST) {
    echo 'Preencha todos os campos';
}
?>
