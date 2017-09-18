<?php 
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
 if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

  <h2 class="page-header">Adicionar Emprestimo</h2>
  <form method ="post" action="addLoan.php">
    <div class="row">
   <div class="form-group col-md-4">
     <label for="idLivro">Id Livro</label>
     <input type="text" class="form-control" name="idLivro">
   </div>
  </div>
  <div class="form-group col-md-4">
     <label for="idLeitor">Id Leitor</label>
     <input type="text" class="form-control" name="idLeitor">
   </div>
  </div>
  <div class="form-group col-md-4">
     <label for="retirada">Retirada</label>
     <input type="text" class="form-control" name="retirada">
   </div>
  </div>
  <div class="form-group col-md-4">
     <label for="dataDeDevolucao">Data de Devolucão</label>
     <input type="text" class="form-control" name="dataDeDevolucao">
   </div>
  </div>
  </div>
    <hr />
    <div id="actions" class="row">
      <div class="col-md-12">
        <input type="submit" class="btn btn-primary"> 
        <a href="emprestimos.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>
  </div> 
</body>
</html>
<?php
require_once __DIR__ . '/../conexao.php';
if (!empty($_POST['idLivro']) && !empty($_POST['idLeitor']) && !empty($_POST['retirada']) && !empty($_POST['dataDeDevolucao'])) {
    $idLivro = $_POST['idLivro'];
    $idLeitor = $_POST['idLeitor'];
    $retirada = $_POST['retirada'];
    $dataDeDevolucao = $_POST['dataDeDevolucao'];
    $usuario = $_SESSION['login'];
    $nameUser = $_SESSION['name'];
    $idDoUsuario = $_SESSION['id'];
    $procuraLivro = '
        SELECT * FROM loans WHERE $id =     ';
    $insercaoDeEmprestimo = '
        INSERT INTO loans(book_id, reader_id, withdrawal_at, return_date, returned_at, canceled_at, user_id)
        VALUES (' . $idLivro . ', ' . $idLeitor . ', \'' . $retirada . '\', \'' . $dataDeDevolucao . '\', null, null, ' . $idDoUsuario . ')
        ';
    $resultadoInsercaoDeEmprestimo = mysqli_query($conexao, $insercaoDeEmprestimo);
    if (! $resultadoInsercaoDeEmprestimo) {
        echo 'Ocorreu um erro ao inserir o emprestimo: ';
    } else {
      echo 'Emprestimo cadastrado com sucesso';
    }
} else if ($_POST){
    echo 'Preencha todos os campos!';
}
?>