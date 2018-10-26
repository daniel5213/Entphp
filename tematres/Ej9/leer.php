<?php
session_start();
$actual = $_SESSION['_activo'];
?>

<h2>Usuario actual <?= $actual?></h2>


Lista de mensajes de 

<table>
<tr>
<th></th>
</tr></table>

<a href="home.php">Volver a lista de usuarios</a>