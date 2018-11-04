<?php
session_start();
$_SESSION['uno']=$_POST['uno'];
?>
<h1>Introduce otro nuemro</h1>
<form action='resultado.php' method ="post">
 <input type='text' name='dos'><input type='submit' value='siguiente'>
 
</form>