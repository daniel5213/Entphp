<?php
$nom=$_POST['nombre'];
echo $nom;
$db = new PDO("mysql:host=localhost;dbname=test","root","");
$db->exec("insert into pais (nombre) values ($nom)");
$db = null;
?>