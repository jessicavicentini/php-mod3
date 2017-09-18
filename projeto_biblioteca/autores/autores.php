<?php 
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

    <h2>Autores</h2>
    <div class="col-md-3">
        <a href="addAuthor.php" class="btn btn-primary h2">Novo Autor</a>
        <a href="livrosAutores.php" class="btn btn-primary h2">Autores por livros</a><br><br>
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
$crudAutores = '
    SELECT 
        *
    FROM 
        authors
';

$resultadoCrudDeAutores = mysqli_query($conexao, $crudAutores);
while($autor = mysqli_fetch_array($resultadoCrudDeAutores, MYSQLI_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $autor['id']. '</td>';
    echo '<td>' . $autor['name'] . '</td>';
    echo '<td class="actions">' . 
    '<a class="btn btn-warning btn-xs" href="editAuthor.php?editIdAuthor='. $autor['id'].'">Editar</a>' . ' ' .  
    '<a class="btn btn-danger btn-xs"  href="deletAuthor.php?deletIdAuthor='. $autor['id'].'">Excluir</a>'. '</td>';
    echo '</tr>';
}

?>
          </table>
      </div>
    </div> 
</body>
</html>

