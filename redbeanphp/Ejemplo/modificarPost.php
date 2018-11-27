<?php
$persona = null;

$id = isset($_POST['id'])?$_POST['id']:'';

$nom = isset($_POST['nom'])?$_POST['nom']:'';
$ape = isset($_POST['ape'])?$_POST['ape']:'';
$est = isset($_POST['est'])?$_POST['est']:'';

require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$persona = R::load('persona',$id);
$persona->nombre = $nom;
$persona->apellido= $ape;
$persona->estatura = $est;
R::store($persona);
$_SESSION['persona'] = $persona;
header('Location:modificarOK.php');
?>