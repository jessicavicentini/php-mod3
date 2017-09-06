<?php
require_once __DIR__ . '/session.php';

if(!empty($_POST['email']) && !empty($_POST['senha'])) {
    if(($_POST['email'] == 'jvicentini@traylabs.com.br') && ($_POST['senha'] == 'tray2017')) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['name'] = 'Jessica';
    } else {
        echo $_SESSION['erro'];
    }
} else if($_POST){
    echo '<br>' . $_SESSION['dadosAlert'];
}
?>
<form method="POST">
E-mail:<input type="text" name="email">
Senha:<input type="password" name="senha">
      <input type="submit" name="enviar">
</form>