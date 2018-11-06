<?php
session_start();
$nom = $_POST['nombre'];
$pwd = $_POST['pwd'];

if (in_array($nom, array_keys($_SESSION['usuario'])) && $pwd == $_SESSION['usuario'][$nom]['contraseña']) {

    $_SESSION['_activo'] = $nom;
    header('Location:home.php');
} else {
    header('Location:conexionfallida.php');
}
?>