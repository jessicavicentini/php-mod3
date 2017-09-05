<form method="POST" >
    <select name="listas" >
        <option value=" ">Selecione</option>
        <option value="/trainees.php">Trainees</option>
        <option value="/tecnologias.php">Tecnologias</option>
    </select>
    <input type="submit">
</form>
<?php
if(isset($_POST['listas'])) {   
    require __DIR__ . $_POST['listas'];
}

  