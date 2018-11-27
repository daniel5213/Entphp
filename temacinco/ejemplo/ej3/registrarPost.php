<?php
require_once '../conexion.php';

function crear_usuario($usu,$pwd) {
    $sql=<<<sql
    insert into banco (nombre,pwd,saldo) values ('$usu','$pwd',100);
sql;
    $db=conectarMySql();
    $db=exec($sql);
}

function ok($usu, $pwd) {
    $sql=<<<sql
    select count(*) as acierto
 from banco where='$usu'
sql;
    $db=conectarMySql();
    $result = $db->query($sql);
    $aciertos=$result[0]['acierto'];
    echo $aciertos;
    return ($usu!=null && $pwd !=null && $aciertos ==0);
    
    
}
$usuario = $_POST['nombre'];
$password = $_POST['pwd'];

if(ok($usuario,$password)){
    crear_usuario($usuario,$password);
    header('Loocation:usuarioOK.php');
}else{
    header('Loocation:registrar.php?status=error');
}


?>