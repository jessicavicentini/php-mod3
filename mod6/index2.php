<?php
    require_once __DIR__ . '/session.php';
?>
<form method="GET" >
    <select name="menu" >
        <option value="/home.php">Home</option>
        <option value="/sobre.php">Sobre</option>
        <option value="/habilidades.php">Habilidades</option>
        <option value="/contatos.php">Contatos</option>
        <option value="/painel.php">Painel</option>
    </select>
    <input type="submit">
</form>
<a href="logout.php"><button>sair</button></a>

<?php    
if(isset($_GET['menu'])) {
    require_once __DIR__ . $_GET['menu'];
}
if (isset($_SESSION['name'])) {
    echo 'Usuario: ' . $_SESSION['name'] . '<br>';
    echo 'Email: ' . $_SESSION['email'];
    
}
?>
   