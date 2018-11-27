<?php
session_start();
require_once '../conexion.php';
$nom = $_POST['nombre'];
$pre = $_POST['precio'];
$accion = $_POST['accion'];
if ($accion == 'preparar') {
    if (isset($nom) && isset($pre)) {
        $_SESSION[$nom] = $pre;
        header('Location:productos.php');
    }
}

if ($accion == 'insertar') {
    if (isset($nom) && isset($pre)) {
        echo "se me mete";
        insertar();
        
    }
}

function insertar() {
    $db=conectarMySql();
    
    $sql =<<<sql
insert into productos(nombre,precio) values(?,?)
sql;
    $resultado=$db->prepare($sql);
    
    foreach ($_SESSION as $indices => $contenido){
        $resultado->execute(["$indices",$contenido]);
        
    }
        
        header('Location:todoOk.php');    
    
    
}

?>