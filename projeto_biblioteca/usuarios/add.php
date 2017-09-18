<?php 
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

   <h2 class="page-header">Adicionar usuário</h2>
   <form method ="POST" action="add.php">
    <div class="row">
   <div class="form-group col-md-4">
     <label for="nome">Nome</label>
     <input type="text" class="form-control" name="nome">
   </div>
   
   <div class="form-group col-md-4">
     <label for="login">Login</label>
     <input type="text" class="form-control" name="login">
   </div>
   
   <div class="form-group col-md-4">
     <label for="senha">Senha</label>
     <input type="password" class="form-control" name="senha">
   </div>
  </div>
    <hr />
    <div id="actions" class="row">
      <div class="col-md-12">
        <input type="submit" class="btn btn-primary"> 
        <a href="usuarios.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>
  </div> 
</body>
</html>
<?php
require_once __DIR__ . '/../conexao.php';
if (!empty($_POST['nome']) && !empty($_POST['login']) && !empty($_POST['senha'])) {
    $login = $_POST['login'];
    $nome = $_POST['nome'];
    $password = $_POST['senha'];
    $procuraLogin = '
        SELECT  COUNT(login) AS qtLogin FROM users WHERE login = \''. $login . '\'
    ';
    $resultadoProcuraLogin = mysqli_query($conexao, $procuraLogin);
    $array = mysqli_fetch_array($resultadoProcuraLogin, MYSQLI_ASSOC);
    $existe=$array['qtLogin'];
    if($existe==0){
        $insercaoDeUsuarios = '
            INSERT INTO users(name, login, password)
            VALUES (\'' . $nome . '\', \'' . $login . '\', \'' . $password . '\')';
        
        $resultadoInsercaoDeUsuario = mysqli_query($conexao, $insercaoDeUsuarios);
        if (!$resultadoInsercaoDeUsuario) {
            echo 'Ocorreu um erro ao inserir o usuário: ';
        } else {
            echo 'Usuário cadastrado com sucesso';
        }
        
    } else {
        echo 'Usuario ja existe!';
    }
} else if ($_POST){
    echo 'Preencha todos os campos!';
}

?>