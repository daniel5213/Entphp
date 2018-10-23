<?php 
$br=[
    ['usuario'=>'pepe','password'=>'pepe']
  ];



function loginOk($u,$p){
    $sol = false;
    global $br;
    foreach ($br as $usu){
        if ($usu['usuario'] == $u && $usu['password']==$p) {
            $sol=true;
        }    
    }
    return $sol;
}
//---------------------------------
$usud=$_POST['usuario'];
$pwd=$_POST['pwd'];
if (loginOK($usud,$pwd)){
    session_start();
    $_SESSION['usuario']=$usud;
    header('Location:home.php');
    
}else{
    global $br;
    array_push($br, $_SESSION['usuario'], $_SESSION['pwd']);
    header('Location:login.php?status=error');
}
?>