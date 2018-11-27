<?php
require_once '../../conexion.php';

function ingresarAficion($afi) {
    $db=conectarMySql();
    $insertado="insert into aficiones(nombre) values('?')";
    $resultado=$db->prepare($insertado);
    foreach ($afi as $indiceaficiones => $contenido){
     $resultado->execute([$contenido,]);
     echo "<pre>";
     print_r("Aficion: ".$contenido);
     echo "</pre>";
    }
}


$nombre=$_POST['nombre'];
$aficiones=$_POST['aficion'];

if($aficiones !=null && !empty($aficiones)){
    ingresarAficion($aficiones);
    echo "Bien";
    header('Location:productos.php');
}else{
    echo "Mal";
}
echo "<pre>";
print_r($aficiones);
echo "</pre>";