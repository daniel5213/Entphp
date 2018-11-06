<?php
session_start();
$u = isset($_REQUEST['ca']) ? $_REQUEST['ca'] : null;

$_SESSION['sustantivos'][]=$u;

?>