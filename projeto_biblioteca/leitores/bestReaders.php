<?php 
 require_once __DIR__ .'/../template.html';
 require_once __DIR__ . '/../session.php';
 if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

  <h2>Leitores destaques</h2>
    <div id="list" class="row">
      <div class="table-responsive col-md-12">
          <table class="table table-striped" cellspacing="0" cellpadding="0">
              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Empréstimos</th>
                  </tr>
              </thead>
<?php
require __DIR__ . '/../conexao.php';
$crudLeitores = '
    SELECT 
        r.*, COUNT(r.id) AS total
    FROM 
        readers AS r
    INNER JOIN 
        loans AS l ON r.id = l.reader_id
    GROUP BY 
        r.id
    ORDER BY 
        total DESC
';

$resultadoCrudDeLeitores = mysqli_query($conexao, $crudLeitores);
while($livro = mysqli_fetch_array($resultadoCrudDeLeitores, MYSQLI_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $livro['id']. '</td>';
    echo '<td>' . $livro['name'] . '</td>';
    echo '<td>' . $livro['total'] . '</td>';
    echo '</tr>';
}
?>
          </table>
      </div>
    </div> 
</body>
</html>


