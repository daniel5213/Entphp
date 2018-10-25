<?php
session_start();
$u='daniel';
$u2='luis';

$_SESSION['usuarios'][$u][]=['password'=>$p,'mensaje'=>[]];
$_SESSION['usu']=[$u];
header('Location:get.php');