<?php 
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>


  <h2 class="page-header">Adicionar livro</h2>
  <form method ="POST" action="addBook.php">
  <div class="row">
   <div class="form-group col-md-4">
     <label for="idEditora">Id Editora</label>
     <input type="text" class="form-control" name="idEditora">
   </div>
   
   <div class="form-group col-md-4">
     <label for="titulo">Titulo</label>
     <input type="text" class="form-control" name="titulo">
   </div>
   
   <div class="form-group col-md-4">
     <label for="descricao">Descrição</label>
     <input type="text" class="form-control" name="descricao">
   </div>
   <div class="form-group col-md-4">
     <label for="isbn">ISBN</label>
     <input type="text" class="form-control" name="isbn">
   </div>
   <div class="form-group col-md-4">
     <label for="isbn">Id Autor</label>
     <input type="text" class="form-control" name="autorLivro">
   </div>
  </div>
  <hr />
    <div id="actions" class="row">
      <div class="col-md-12">
        <input type="submit" class="btn btn-primary"> 
        <a href="livros.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>
  </div> 
</body>
</html>
<?php
require_once __DIR__ . '/../conexao.php';
if (!empty($_POST['idEditora']) && !empty($_POST['titulo']) && !empty($_POST['descricao']) && !empty($_POST['isbn']) && !empty($_POST['autorLivro'])) {
        
    $idEditora = $_POST['idEditora'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $isbn = $_POST['isbn'];
    $autorLivro = $_POST['autorLivro'];
    $procuraIsbn = '
        SELECT COUNT(id) AS qtdIsbn FROM books WHERE isbn = ' . $isbn . '
    ';
    $resultadoProcuraIsbn = mysqli_query($conexao, $procuraIsbn);
    $qtdResultadoProcuraIsbn = mysqli_fetch_array($resultadoProcuraIsbn, MYSQLI_ASSOC);
    $existeIsbn = $qtdResultadoProcuraIsbn['qtdIsbn']; 
    if ($existeIsbn == 0) {

        $insercaoDeLivros = '
            INSERT INTO books(publisher_id, title, description, isbn)
            VALUES (\'' . $idEditora . '\', \'' . $titulo . '\', \'' . $descricao . '\' , \'' . $isbn . '\')';
        
        $resultadoInsercaoDeLivro = mysqli_query($conexao, $insercaoDeLivros);
        if (! $resultadoInsercaoDeLivro) {
            echo 'Ocorreu um erro ao inserir o livro: ';
        } else {
          echo 'Livro cadastrado com sucesso';
        }
    $ultimoLivro = '
      SELECT id FROM books ORDER BY id DESC LIMIT 1
    ';
    $resultadoUltimoLivro = mysqli_query($conexao, $ultimoLivro);

    $procuraIdLivro = mysqli_fetch_array($resultadoUltimoLivro, MYSQLI_ASSOC);    
    $idDoAutorDoLivro = $procuraIdLivro['id'];
    $inserirAutorUltimoLivro = '
        INSERT INTO book_authors (book_id, author_id) VALUES (\'' . $idDoAutorDoLivro . '\', \'' . $autorLivro . '\')
    ';
    $resultadoInserirAutorUltimoLivro = mysqli_query($conexao, $inserirAutorUltimoLivro);
} else {
    echo 'Códico ISBN já cadastrado!';
}
} else if ($_POST) {
    echo 'Preencha todos os campos!';
}
?>