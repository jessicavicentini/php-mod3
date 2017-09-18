<?php 
  require_once __DIR__ .'/../template.html';
  require_once __DIR__ . '/../session.php';
   if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

   <h2 class="page-header">Adicionar Editora</h2>
   <form method ="POST" action="addPublisher.php">
    <div class="row">
   <div class="form-group col-md-4">
     <label for="nome">Nome</label>
     <input type="text" class="form-control" name="nome">
   </div>
  </div>
    <hr />
    <div id="actions" class="row">
      <div class="col-md-12">
        <input type="submit" class="btn btn-primary"> 
        <a href="editoras.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>
  </div> 
</body>
</html>
<?php
require_once __DIR__ . '/../conexao.php';
if (!empty($_POST['nome'])) {
        
    $nome = $_POST['nome'];
    $insercaoDeEditoras = '
        INSERT INTO publishers(name)
        VALUES (\'' . $nome . '\')
        ';
    $resultadoInsercaoDeEditora = mysqli_query($conexao, $insercaoDeEditoras);
    if (! $resultadoInsercaoDeEditora) {
        echo 'Ocorreu um erro ao inserir o Editora: ';
    } else {
      echo 'Editora cadastrado com sucesso';
    }
} else if ($_POST) {
    echo 'Preencha todos os campos!';
}

?>