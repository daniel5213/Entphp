<?php 

session_start();
$u=$_POST['nombre'];
$p=$_POST['pwd'];

if (in_array($u, array_keys($_SESSION['usuarios']))&& $p == $_SESSION['usuarios'][$u]['pwd']){
    
    
   $_SESSION['_activo']=$u;
    header('Location:listausuarios.php');
}else{
    header('Location:login.php?status=error');
}
?>