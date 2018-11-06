<?php
session_start();
$usuario_actual = $_SESSION['_activo'];
if ($usuario_actual == null || empty($usuario_actual)) {
    header('Location:accesono.php');
}

?>

<h1>Hola <?= $usuario_actual?></h1>
<a href="cambiarContraseña.php">Cambiar la contraseña</a>
<a href="cerrarSesion.php">Cerrar Session</a>