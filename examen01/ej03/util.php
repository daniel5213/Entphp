<?php 
include_once 'raiz.php';
include_once 'conbinar.php';

$sustantivo = strtolower($_GET['sustantivo']);
$boton = strtolower($_GET['boton']);

if($sustantivo!=null){
    if($boton == 'raiz'){
        echo raiz($sustantivo);
    }elseif ($boton == 'conbinar' && raiz($sustantivo) != 'desconocido'){
        echo '<br>'. conbinar(raiz($sustantivo));
    }
}

?>