<?php 
session_start();
$_SESSION['color'][$_SESSION['usuario']] =  $_POST['color'];
/*echo '<pre>';
print_r("$_SESSION");
echo'</pre>';*/
header('Location:login.php');
?>