<?php 
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
error_reporting(0);
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

  <h2>Livros</h2>
  <div class="col-md-3">
    <a href="addBook.php" class="btn btn-primary h2">Novo livro</a>
    <a href="bestBooks.php" class="btn btn-primary h2">Livros mais vendidos</a><br><br>
  </div>
  <div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Editora</th>
              <th>Título</th>
              <th>Descrição</th>
              <th>ISBN</th>
              <th class="actions">Ações</th>
            </tr>
          </thead>
<?php
require __DIR__ . '/../conexao.php';

$crudLivros = '
    SELECT 
        b.id AS id, p.name AS editora, b.title AS title, b.description AS description, b.isbn AS isbn
    FROM 
        books AS b
    INNER JOIN 
        publishers AS p ON b.publisher_id = p.id
    ORDER BY 
      b.id ASC

';
$resultadoCrudDeLivros = mysqli_query($conexao, $crudLivros);
while($livro = mysqli_fetch_array($resultadoCrudDeLivros, MYSQLI_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $livro['id']. '</td>';
    echo '<td>' . $livro['editora'] . '</td>';
    echo '<td>' . $livro['title'] . '</td>';
    echo '<td>' . $livro['description'] . '</td>';
    echo '<td>' . $livro['isbn'] . '</td>';
    echo '<td class="actions">' . 
    '<a class="btn btn-warning btn-xs" href="editBook.php?editIdLivro='. $livro['id'].'">Editar</a>' . ' ' .  
    '<a class="btn btn-danger btn-xs"  href="deletBook.php?deletIdLivro='. $livro['id'].'">Excluir</a>'. '</td>';
    echo '</tr>';

}
?>
        </table>
    </div>
  </div> 
</body>
</html>



