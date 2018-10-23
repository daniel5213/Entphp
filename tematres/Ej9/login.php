<?php 

session_start();
$u=$_POST['nombre'];
$p=$_POST['pwd'];
if (in_array($u, array_keys($_SESSION['nombre']))){
    $_SESSION['nombre'][$u]=['mensaje'=>[]];

    header('Location:home.php');
}else{
    header('Location:index.php?status=error');
}
?>