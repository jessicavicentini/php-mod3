<?php 
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php'; 
if (!isset($_SESSION['login'])) {
    echo $error;
    exit;
}
?>
  <h2>Usuários</h2>
  <div class="col-md-3">
    <a  href="add.php" class="btn btn-primary h2">Novo usuário</a><br><br>
    </div>
      <div id="list" class="row">
        <div class="table-responsive col-md-12">
          <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Login</th>
                <th class="actions">Ações</th>
              </tr>
            </thead>
        </div>
      </div> 
<?php
require __DIR__ . '/../conexao.php';

$crudUsuarios = '
    SELECT 
        id, name, login
    FROM 
        users
';

$resultadoCrudDeUsuarios = mysqli_query($conexao, $crudUsuarios);
while($usuario = mysqli_fetch_array($resultadoCrudDeUsuarios, MYSQLI_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $usuario['id']. '</td>';
    echo '<td>' . $usuario['name'] . '</td>';
    echo '<td>' . $usuario['login'] . '</td>';
    echo '<td class="actions">' . 
    '<a class="btn btn-warning btn-xs" href="edit.php?editId='. $usuario['id'].'">Editar</a>' . ' ' . 
    '<a class="btn btn-danger btn-xs"  href="delet.php?id='. $usuario['id'].'">Excluir</a>'. '</td>';    
    echo '</tr>';
}
?>
          </table>


