<?php
    //si existe el uid del coockie es true, si no existe es false y devuelve 0;
    $n_visitas = isset ( $_COOKIE ['UID'] ) ? $_COOKIE ['UID'] : 0;
    //primeravez es nvisitas a 0
    $primeraVez = ($n_visitas == 0);
    echo "Numero de visitas $n_visitas";
    /*Si primera vez es distinta que 0 
     * añadimos a la uid el numero 1.
     * Si no es disinto que 0
     * añadimos al uid las visitas mas 1*/
    if ($primeraVez) {
        setcookie ( "UID", 1 );
        echo "<h1>Bienvenido</h1>";
    } else {
        setcookie("UID",$n_visitas + 1);
        echo "Numero de visitas en el if $n_visitas";
        echo "<h2>Bienvenido eres el visitante $n_visitas en esta pagina</h2>";
     
        
        
    }
    
?>