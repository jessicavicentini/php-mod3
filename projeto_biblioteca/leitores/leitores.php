<?php 
require_once __DIR__ .'/../template.html';
require_once __DIR__ . '/../session.php';
if (empty($_SESSION['login'])) {
    echo $error;
    exit;
}
?>


  <h2>Leitores</h2>
  <div class="col-md-3">
      <a href="addReader.php" class="btn btn-primary h2">Novo Leitor</a>
      <a href="bestReaders.php" class="btn btn-primary h2">Leitores destaques</a><br><br>
  </div>

   <div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
     </div>
</div> 
</body>
</html>  

<?php
require __DIR__ . '/../conexao.php';
$crudLeitores = '
    SELECT 
        *
    FROM 
        readers
';
$resultadoCrudDeLeitores = mysqli_query($conexao, $crudLeitores);
while($leitor = mysqli_fetch_array($resultadoCrudDeLeitores, MYSQLI_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $leitor['id']. '</td>';
    echo '<td>' . $leitor['name'] . '</td>';
    echo '<td class="actions">' . 
    '<a class="btn btn-warning btn-xs" href="editReader.php?editIdReader='. $leitor['id'].'">Editar</a>' . ' ' .  
    '<a class="btn btn-danger btn-xs"  href="deletReader.php?deletIdReader='. $leitor['id'].'">Excluir</a>'. '</td>';
    echo '</tr>';
}
?>
</table>


