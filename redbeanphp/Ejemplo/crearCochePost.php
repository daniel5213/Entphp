<?php
$mat = isset($_POST['mat'])?$_POST['mat']:null;
echo $mat.' registrado';
echo '<a href="menu.php">Volver al menú</a>';

// PERSISTENCIA

require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$coche = R::dispense('coche');
$coche -> matricula = $mat;

R::store($coche);
?>