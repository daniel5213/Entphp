<?php 
session_start();
include 'bd.php';
$visitas=0;
$sesion=$_SESSION['usuario'];

$_SESSION[`bd`]=$bd;
$visitas = isset ( $_COOKIE ['UID'] ) ? $_COOKIE ['UID'] : 0;

$primeraVez = ($visitas==0);

function comprobar($u) {
  $nvisi = 0;
    global $bd;
    foreach ($bd as $usud){

        if($usud['usuario']=$u){
            return $nvisi=$usud['usuario'];
        }
    }
  return $nvisi;
}
if(isset($sesion)){
if (comprobar($sesion)==!null) {
      if ($primeraVez) {
          
        setcookie ( "UID", 1 );
        
    } else {
       
        setcookie("UID",$visitas + 1);
    }
}
} else {
    header('Location:login.php');
}

session_abort();



?>
<p>Estas conectado como <?= $sesion ?> Numero de visitas <?= $visitas?>
<form action="login.php">

<input type="submit" value="desconectar"/>
<img src="img/esp.png" width="17px" height="18px"/>
<input type="radio"/>
<img src="img//gb.png" width="17px" height="18px"/>
<input type="radio"/>
<img src="img//fr.png" width="17px" height="18px"/>
<input type="radio"/>
</form>