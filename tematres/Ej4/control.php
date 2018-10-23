<?php 
include 'bd.php';




function login($u,$p) {
    $pre=false;
    global $bd;
    foreach ($bd as $usu){
        if($usu['usuario']==$u && $usu['pass']==$p){
        $pre=true;
    }
    }
    return $pre;
}


$usuario=$_POST['usuario'];
$pass=$_POST['pwd'];

if(login($usuario,$pass)){
    session_start();
    $_SESSION['usuario']=$usuario;
    header('Location:bandera.php');
}else{
    header('Location:login.php');
}



?>