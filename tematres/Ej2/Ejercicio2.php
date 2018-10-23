<?php
    //si existe el uid del coockie es true, si no existe es false y devuelve 0;
    $visitas = isset ( $_COOKIE ['UID'] ) ? $_COOKIE ['UID'] : 0;
    //primeravez es nvisitas a 0
    $primeraVez = ($visitas == 0);
    echo "Numero de visitas $visitas";
    /*Si primera vez es distinta que 0 
     * añadimos a la uid el numero 1.
     * Si no es disinto que 0
     * añadimos al uid las visitas mas 1*/
    if ($primeraVez) {
        setcookie ( "UID", 1 );
        echo "<h1>Bienvenido</h1>";
    } else {
        setcookie("UID",$visitas + 1);
        echo "Numero de visitas en el if $visitas";
        echo "<h2>Bienvenido eres el visitante $visitas en esta pagina</h2>";
     
        
        
    }
    
?>