<?php
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

<body> 
    <br><br>
    <form method="post" action="editReader.php">
        <table border="0">
            <tr> 
                <td>Nome</td>
                <td><input type="text" name="newNameReader"></td>
            </tr>
            <tr>
                <td><button type="submit" name="editIdReader" value="<?php echo $_GET['editIdReader']; ?>">Enviar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
require_once __DIR__ . "/../conexao.php";
if (!empty($_POST['newNameReader'])) {
 
    $editedIdReader = $_POST['editIdReader'];
    $newNameReader = $_POST['newNameReader'];
    $editarLeitor = '
        UPDATE readers SET name = \'' . $newNameReader . '\'
         WHERE id = \'' . $editedIdReader . '\'
    ';
    $resultadoEditarLeitor = mysqli_query($conexao, $editarLeitor);
     if (!$resultadoEditarLeitor) {
        echo 'Ocorreu um erro ao editar o leitor';
    } else {
        echo 'Leitor editado com sucesso';
    }
} else if ($_POST) {
    echo 'Preencha todos os campos';
}

?>
