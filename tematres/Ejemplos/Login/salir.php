<?php 
session_start();
$_SESSION['color']= $_POST['$color'];
header('Location:login.php');
?>