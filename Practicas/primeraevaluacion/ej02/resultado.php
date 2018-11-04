<?php
session_start();
$_SESSION['uno'];
$dos=$_POST['dos'];
echo "Primer numero:".$_SESSION['uno']."<br>";
echo "Segundo numero:".$dos."<br>";
if($_SESSION['uno']>$dos){
 
    echo "El segundo  numero es   Menor que el primero"."<br>";
}
else{
    echo "El primer numero es   Menor que el segundo"."<br>";
}
echo "<a href='numero1.php'>Volver a introducir numeros</a>";
?>