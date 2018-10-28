<?php
session_start();
$usuario='daniel';
$u2='luis';

$_SESSION['usuarios'][$usuario][]=['password'=>$p,'mensaje'=>[]];
$_SESSION['usu']=[$usuario];
header('Location:get.php');