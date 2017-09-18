<?php

require_once __DIR__ . '/template.html';
require_once __DIR__ . '/conexao.php';
require_once __DIR__ . '/session.php';


if(!empty($_POST['login']) && !empty($_POST['senha'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $loginUsuario = '
        SELECT * FROM users 
    ';
    $loginUsuarioBanco = mysqli_query($conexao, $loginUsuario);
    while($usuarioCadastrado = mysqli_fetch_array($loginUsuarioBanco, MYSQLI_ASSOC)){
        if(($login == $usuarioCadastrado['login']) && ($senha == $usuarioCadastrado['password'])) { 
            $name = $usuarioCadastrado['name'];
            $id = $usuarioCadastrado['id'];
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            $_SESSION['name'] = $name;
            $_SESSION['id'] = $id;
        } 
    }
} elseif($_POST) {
    echo 'Preencha todos os campos';
}

?>
  <?php
  if(!isset($_SESSION['id'])) { ?>
    <form method="POST" action="login.php">
      <div class="form-group col-md-4">
        <h3>Usuário</h3><br>
        <label>Login : </label>
          <input type="text" class="form-control" name="login"><br>
        <label>Senha :</label>
          <input type="password" class="form-control" name="senha"><br>
          <input type="submit" class="btn btn-primary" value="Logar">
      </div>
    </form>
    <?php } else { echo '<h2>Bem vindo(a) ' . $_SESSION['name'] . '</h2>'?>
        <br>
          <a  class="btn btn-primary" href="/logout.php">Sair</a>
    <?php } ?>        

