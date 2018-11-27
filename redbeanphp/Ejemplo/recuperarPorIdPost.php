<?php

$persona = null;

require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$persona = R::load('persona',$_POST['idPersona']);
$accion = isset($_POST['accion'])?$_POST['accion']:'';
session_start();
$_SESSION['persona'] = $persona;

if ( $accion =='rpid') {
    header('Location:mostrarDatosPersona.php');
}
else {
    header('Location:modificarDatosPersonaRecuperada.php');
}

?>