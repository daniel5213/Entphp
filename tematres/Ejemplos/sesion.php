<?php 
session_start();



if (!isset($_COOKIE['PHPSESSID'])){
    echo 'Hola desconocido';
    $_SESSION['nombre']='Pepe';
    $_SESSION['apellido']='Garcia';
}else{
    
    echo '<h1>';
    echo session_id();
    echo'</h1>';
    
    echo '<h1>';
    echo "Hola {$_SESSION['nombre']}{$_SESSION['apellido']}";
    echo'</h1>';

}
?>