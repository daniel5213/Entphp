<?php
session_start();
$actual = $_SESSION['_activo'];

$destinatario = '';

$url = $_SERVER["REQUEST_URI"];
$url = explode('?', $url);

for ($i = 0; $i < sizeof($url); $i ++) {

    if ($i == 1) {
        $destinatario = $url[$i];
    }
}

echo "<pre>";
print_r($destinatario);
echo "</pre>";

echo <<<html
<h2>Usuario actual $actual</h2>


Lista de mensajes de $destinatario

<table>
html;
foreach ($_SESSION['usuarios'][$destinatario]['mensajes'] as $indicemensaje => $contenidomensaje) {

    echo "<tr><th>" . $contenidomensaje['fecha'] . "</th><th>" . $contenidomensaje['texto'] . "</th></tr>";
}

?>