<?php
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';

if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

    <br><br>
    <form method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nome</td>
                <td><input type="text" name="newName"></td>
            </tr>
            <tr> 
                <td>Login</td>
                <td><input type="text" name="newLogin"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="newPassword"></td>
            </tr>
            <tr>
                <td><button type="submit" name="editId" value="<?php echo $_GET['editId']; ?>">Enviar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
require_once __DIR__ . '/../conexao.php';
if (!empty($_POST['newName']) && !empty($_POST['newLogin']) && !empty($_POST['newPassword'])) {
 
    $editedId = $_POST['editId'];
    $newName = $_POST['newName'];
    $newLogin = $_POST['newLogin'];
    $newPassword = $_POST['newPassword'];
    $editarUsuario = '
        UPDATE users SET name = \'' . $newName . '\', login = \'' . $newLogin . '\', password = \'' . $newPassword . '\' 
        WHERE id = \'' . $editedId . '\'
    ';
    $resultadoEditarUsuario = mysqli_query($conexao, $editarUsuario);
    if(!$resultadoEditarUsuario) {
        echo 'Ocorreu um erro ao editar usuário';
    } else {
        echo 'Usuário editado com sucesso';
    }
} else if($_POST) {
    echo 'Preencha todos os campos';
}
?>