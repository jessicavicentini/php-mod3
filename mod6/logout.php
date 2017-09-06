<?php
require_once __DIR__ . '/session.php';

session_destroy();
echo $_SESSION['logout'];
header('Location: index2.php');
?>
<a href="index2.php"><button>home</button></a>

