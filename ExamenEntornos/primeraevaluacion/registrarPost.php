<?php
session_start();
$nom=$_POST['nombre'];
$pwd=$_POST['pwd'];
if (! in_array($nom, array_keys($_SESSION['usuario'])) && !empty($nom) && !empty($pwd)) {
    
    $_SESSION['usuario'][$nom] = ['contraseña'=>$pwd];
    header('Location:confirm.php');
} else {
    
    header('Location:registrofallido.php');
}
?>