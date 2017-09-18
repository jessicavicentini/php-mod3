<?php 
  require_once __DIR__ .'/../template.html';
  require_once __DIR__ . '/../session.php';
   if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>

   <h2 class="page-header">Adicionar autor</h2>
   <form method ="POST" action="addAuthor.php">
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
        <a href="autores.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>
  </div> 

<?php
require_once __DIR__ . '/../conexao.php';
if (!empty($_POST['nome'])) {
    $nome = $_POST['nome'];
    $insercaoDeAutors = '
        INSERT INTO authors(name)
        VALUES (\'' . $nome . '\')
        ';
    $resultadoInsercaoDeAutor = mysqli_query($conexao, $insercaoDeAutors);
    if (! $resultadoInsercaoDeAutor) {
        echo 'Ocorreu um erro ao inserir o autor: ' . mysql_error($conexao);
    } else {
      echo 'Autor cadastrado com sucesso';
    }
} else if ($_POST) {
    echo 'Preencha todos os campos!';
}
?>