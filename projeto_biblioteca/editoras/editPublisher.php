<?php
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
 if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

    <br><br>
    <form method="post" action="editPublisher.php">
        <table border="0">
            <tr> 
                <td>Nome</td>
                <td><input type="text" name="newNamePublisher"></td>
            </tr>
            <tr>
                <td><button type="submit" name="editIdPublisher" value="<?php echo $_GET['editIdPublisher']; ?>">Enviar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
require_once __DIR__ . "/../conexao.php";
if (!empty($_POST['newNamePublisher'])) {
 
    $editedIdPublisher = $_POST['editIdPublisher'];
    $newNamePublisher = $_POST['newNamePublisher'];
    $editarEditora = '
        UPDATE publishers SET name = \'' . $newNamePublisher . '\'
         WHERE id = \'' . $editedIdPublisher . '\'
    ';
    $resultadoEditarEditora = mysqli_query($conexao, $editarEditora);
    if (!$resultadoEditarEditora) {
        echo 'Ocorreu um erro ao editar a editora';
    } else {
        echo 'Editora editado com sucesso';
    }
} else if($_POST) {
    echo 'Preencha todos os campos';
}

?>
