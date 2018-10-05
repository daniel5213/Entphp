<?php

//$micolor=[$_GET{'rojo'},$_get{'verde'},$_GET{'azul'}];
$colores='';
if (!isset($_GET['colores'])){
    $colores = 'Ninguno';
}else{
    foreach ($_GET['colores'] as $c){
                $colores=$colores .''. $c.", ";
    }
}
echo "Mis favoritos son: ".$colores;

?>