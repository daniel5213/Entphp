<?php
session_start();
$remitente = $_POST['remitente'];
$destinatario = $_POST['destinatario'];

$mensaje = $_POST['mensaje'];
$tiempodelsistema = time();
$fechadelenvio = date("d/m/Y", $tiempodelsistema) . "(" . date("H:i", $tiempodelsistema) . ")";
print_r($fechadelenvio);
if ($mensaje != null) {

    $_SESSION['usuarios'][$destinatario]['mensajes'][] = [
        'remitente' => $remitente,
        'fecha' => $fechadelenvio,
        'texto' => $mensaje
    ];

    header('Location:listausuarios.php');
} else {
    header('Location:listausuarios.php?status=error');
}
?>