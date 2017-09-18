<?php 
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

    <h2>Livros mais vendidos</h2>

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
                      <th>Empréstimos</th>
                   </tr>
              </thead>
<?php
require __DIR__ . '/../conexao.php';
$crudLivros = '
    SELECT 
        b.id AS id, p.name AS editora, b.title AS title, b.description AS description, b.isbn AS isbn, COUNT(b.id) AS total
    FROM 
        books AS b
    INNER JOIN 
        publishers AS p ON b.publisher_id = p.id
    INNER JOIN 
        loans AS l ON b.id = l.book_id
    GROUP BY 
        b.id
    ORDER BY 
        total DESC
';

$resultadoCrudDeLivros = mysqli_query($conexao, $crudLivros);
while($livro = mysqli_fetch_array($resultadoCrudDeLivros, MYSQLI_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $livro['id']. '</td>';
    echo '<td>' . $livro['editora'] . '</td>';
    echo '<td>' . $livro['title'] . '</td>';
    echo '<td>' . $livro['description'] . '</td>';
    echo '<td>' . $livro['isbn'] . '</td>';
    echo '<td>' . $livro['total'] . '</td>';
    echo '</tr>';
}

?>
          </table>
       </div>
 </div> 
</body>
</html>


