<?php 
session_start();
if (isset($_SESSION['nombre'])) {
    foreach ($_SESSION['nombre'] as $u){
    $nombre = $u;
    }
}
print_r($_SESSION['nombre']);
?>

<h1>hola <?= $nombre?></h1>

<input type="button" value="volver"/>