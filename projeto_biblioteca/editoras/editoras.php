<?php 
 require_once __DIR__ .'/../template.html';
 require_once __DIR__ . '/../session.php';
  if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

    <h2>Editoras</h2>
    <div class="col-md-3">
        <a href="addPublisher.php" class="btn btn-primary h2">Nova Editora</a><br><br>
    </div>
    <div id="list" class="row">
      <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th class="actions">Ações</th>
                </tr>
            </thead>
<?php
require __DIR__ . '/../conexao.php';
$crudEditoras = '
    SELECT 
        *
    FROM 
        publishers
';
$resultadoCrudDeEditoras = mysqli_query($conexao, $crudEditoras);
while($editora = mysqli_fetch_array($resultadoCrudDeEditoras, MYSQLI_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $editora['id']. '</td>';
    echo '<td>' . $editora['name'] . '</td>';
    echo '<td class="actions">' . 
    '<a class="btn btn-warning btn-xs" href="editPublisher.php?editIdPublisher='. $editora['id'].'">Editar</a>' . ' ' .  
    '<a class="btn btn-danger btn-xs"  href="deletPublisher.php?deletIdPublisher='. $editora['id'].'">Excluir</a>'. '</td>';
    echo '</tr>';
}
?>
          </table>
      </div>
    </div> 
</body>
</html>




