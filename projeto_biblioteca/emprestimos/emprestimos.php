<?php 
 require_once __DIR__ .'/../template.html';
 require_once __DIR__ . '/../session.php';
  if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

    <h2>Empréstimos</h2>
    <div class="col-md-3">
        <a href="addLoan.php" class="btn btn-primary h2">Novo emprestimo</a><br><br>
    </div>     
     <div id="list" class="row">
      <div class="table-responsive col-md-12">
          <table class="table table-striped" cellspacing="0" cellpadding="0">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Livro</th>
                      <th>Leitor</th>
                      <th>Retirada</th>
                      <th>Data de Devolução</th>
                      <th>Devolução</th>
                      <th>Cancelamento</th>
                      <th>Usuário</th>
                      <th class="actions">Ações</th>
                   </tr>
              </thead>
<?php
require __DIR__ . '/../conexao.php';
$crudEmprestimos = '
    SELECT 
        l.id AS id, b.title AS livro, r.name AS leitor, l.withdrawal_at AS retirada , l.return_date AS data_de_devolucao, l.returned_at AS devolucao, l.canceled_at As cancelamento, u.name AS usuario
    FROM 
        loans AS l
    INNER JOIN 
        books AS b ON l.book_id = b.id
    INNER JOIN 
        readers As r ON l.reader_id = r.id
    INNER JOIN 
        users AS u ON l.user_id = u.id 
    ORDER BY 
        id ASC
';

$resultadoCrudDeEmprestimos = mysqli_query($conexao, $crudEmprestimos);
while($emprestimo = mysqli_fetch_array($resultadoCrudDeEmprestimos, MYSQLI_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $emprestimo['id']. '</td>';
    echo '<td>' . $emprestimo['livro'] . '</td>';
    echo '<td>' . $emprestimo['leitor'] . '</td>';
    echo '<td>' . $emprestimo['retirada'] . '</td>';
    echo '<td>' . $emprestimo['data_de_devolucao'] . '</td>';
    echo '<td>' . $emprestimo['devolucao'] . '</td>';
    echo '<td>' . $emprestimo['cancelamento'] . '</td>';
    echo '<td>' . $emprestimo['usuario'] . '</td>';
    echo '<td class="actions">' . 
    '<form method="post" action="returnedLoan.php"><button value="'. $emprestimo['id'].'" name="returnedIdLoan" class="btn btn-warning btn-xs" >Devolver</button></form>'. ' ' .
    '<form method="post" action="canceledLoan.php"><button value="'. $emprestimo['id'].'" name="canceledIdLoan" class="btn btn-danger btn-xs" >Cancelar</button></form>'. '</td>';
    echo '</tr>';
}
?>
          </table>
       </div>
 </div> 
</body>
</html>


