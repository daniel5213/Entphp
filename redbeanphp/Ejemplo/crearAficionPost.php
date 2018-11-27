<?php
$aficion = isset($_POST['nombreAficion'])?$_POST['nombreAficion']:null;
echo $aficion.' registrado';
echo '<a href="menu.php">Volver al menú</a>';

// PERSISTENCIA

require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$a = R::dispense('aficion');
$a -> nombre = $aficion;

R::store($a);
?>