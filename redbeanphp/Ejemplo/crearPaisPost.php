<?php
$nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
echo $nombre.' registrado';
echo '<a href="menu.php">Volver al menú</a>';
// PERSISTENCIA

require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$pais = R::dispense('pais');
$pais -> nombre = $nombre;

R::store($pais);
?>