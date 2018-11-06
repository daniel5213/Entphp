<?php 
session_start();
$usuario_actual=$_SESSION['_activo'];
if($usuario_actual==null|| empty($usuario_actual)){
    header('Location:accesono.php');
}else{
    header('Location:cambiar.php');
}
?>