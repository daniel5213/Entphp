<?php
session_start();
$usuario = $_POST['nombre'];
$password = $_POST['pwd'];

if (in_array($usuario, array_keys($_SESSION['usuarios'])) && $password == $_SESSION['usuarios'][$usuario]['pwd']) {

    $_SESSION['_activo'] = $usuario;
    header('Location:listausuarios.php');
} else {

    header('Location:fallodeconexion.php?status=error');
}
?>