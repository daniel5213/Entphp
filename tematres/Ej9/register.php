<?php
session_start();
$u=$_POST['nombre'];
$p=$_POST['pwd'];
if (!in_array($u, array_keys($_SESSION['nombre']))){
  $_SESSION['nombre'][$u]=['pwd'=>$p,
      'mensaje'=>[]];
       header('Location:index.php');
}else{
    header('Location:index.php?status=error');
}
?>