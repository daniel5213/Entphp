<?php
session_start();
$usuario=$_POST['nombre'];
$password=$_POST['pwd'];
if (!in_array($usuario, array_keys($_SESSION['usuarios']))){
  $_SESSION['usuarios'][$usuario]=['pwd'=>$password,'mensajes'=>[]];

       header('Location:index.php');
}else{
    header('Location:index.php?status=error');
}
?>