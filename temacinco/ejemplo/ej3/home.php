<?php
session_start();
$usuario_actual = $_SESSION['_activo'];
/* if ($usuario_actual == null || empty($usuario_actual)) {
    header('Location:accesono.php');
} */
$saldo=200;

echo <<<html
<h1>Hola <?= $usuario_actual?></h1>
Tienes $saldo euros
¿Cuanto quieres donar? 
<form>
Cantidad<input type="text" name="saldo">
</form>
<a href="cerrarSesion.php">Cerrar Session</a>
html;
?>