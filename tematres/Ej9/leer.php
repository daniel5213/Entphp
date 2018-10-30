<?php
session_start();
$actual = $_SESSION['_activo'];

$destinatario = '';

$destinatario = $_GET['remitente'];

echo <<<html
<h2>Usuario actual $actual</h2>


Lista de mensajes de $destinatario

<table>
html;
foreach ($_SESSION['usuarios'][$destinatario]['mensajes'] as $indicemensaje => $contenidomensaje) {

    echo "<tr><th>" . $contenidomensaje['fecha'] . "</th><th>" . $contenidomensaje['texto'] . "</th></tr>";
}

echo <<<html
</table>
<a href="listausuarios.php">Volver a lista de usuarios</a>
html;

?>