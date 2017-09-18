<?php 
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
 if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}

?>
 <h2 class="page-header">Adicionar Leitor</h2>
   <form method ="POST" action="addReader.php">
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
        <a href="leitores.php" class="btn btn-default">Cancelar</a>
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
    $insercaoDeLeitore = '
        INSERT INTO readers(name)
        VALUES (\'' . $nome . '\')
        ';
    $resultadoInsercaoDeLeitor = mysqli_query($conexao, $insercaoDeLeitore);
    if (! $resultadoInsercaoDeLeitor) {
        echo 'Ocorreu um erro ao inserir o leitor: ' . mysql_error($conexao);
    } else {
      echo 'Leitor cadastrado com sucesso';
    }
} else if ($_POST) {
    echo 'Preencha todos os campos!';
}
?>