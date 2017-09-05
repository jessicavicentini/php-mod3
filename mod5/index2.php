<form method="GET" >
    <select name="menu" >
        <option value="/home.php">Home</option>
        <option value="/sobre.php">Sobre</option>
        <option value="/habilidades.php">Habilidades</option>
        <option value="/contatos.php">Contatos</option>
    </select>
    <input type="submit">
</form>
<?php

if(isset($_GET['menu'])) {
    require __DIR__ . $_GET['menu'];
}