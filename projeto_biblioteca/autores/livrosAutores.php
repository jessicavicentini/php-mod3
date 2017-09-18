<?php 
 require_once __DIR__ .'/../template.html';
 require_once __DIR__ . '/../session.php';
  if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

    <h2>Autores e Obras</h2>
    <div id="list" class="row">
      <div class="table-responsive col-md-12">
          <table class="table table-striped" cellspacing="0" cellpadding="0">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Livro</th>
                      <th>Autor</th>
                   </tr>
              </thead>
<?php
require __DIR__ . '/../conexao.php';
$crudAutores = '
    SELECT 
        ba.id AS id, b.title AS livro, a.name AS autor
    FROM 
        book_authors AS ba
    INNER JOIN 
        books AS b ON b.id = ba.book_id
    INNER JOIN
        authors AS a ON a.id = ba.author_id
';

$resultadoCrudDeAutores = mysqli_query($conexao, $crudAutores);
while($autor = mysqli_fetch_array($resultadoCrudDeAutores, MYSQLI_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $autor['id']. '</td>';
    echo '<td>' . $autor['autor'] . '</td>';
    echo '<td>' . $autor['livro'] . '</td>';
    echo '</tr>';
}
?>  
          </table>
      </div>
    </div> 
</body>
</html>


