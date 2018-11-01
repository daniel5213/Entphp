<?php
session_start();
$actual = $_SESSION['_activo'];
echo "<h4>Usuario Actual como $actual</h4>";

echo <<<HTML
<h3>Lista de usuarios/mensajes</h3>
<table>
HTML;
echo "<pre>";
print_r($_SESSION['usuarios']);
echo "</pre>";
function bandejaentrada($remitente,$desinatario) {
    
   
}
foreach ($_SESSION['usuarios'] as $usuario=>$datosusuario) {

    $enlaceEscribir = "escribir.php?destinatario=" . $usuario;
    $numeroMensaje = count($_SESSION['usuarios'][$usuario]['mensajes']);
    if ($numeroMensaje > 0) {
        $enlaceleer = '<a href="leer.php?remitente=' . $usuario . '">Leer</a>';
    } else {
        $enlaceleer = '';
    }

    if ($usuario != $_SESSION['_activo']) {

        echo $usuario . '(' . $numeroMensaje . ')&nbsp' . $enlaceleer . '&nbsp<a href="' . $enlaceEscribir . '">Escribir</a></br/>';
    }
}

echo <<<html
<p>
<a href="login.php">Volver al login</a>
html;
?>

