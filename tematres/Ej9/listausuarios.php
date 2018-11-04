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

function bandejaentrada($remitente, $destinatario)
{
    $bandejasaliente = 0;

    foreach ($_SESSION['usuarios'][$remitente]['mensajes'] as $indicemensaje => $contenidomensaje) {
        
        
        if (isset($contenidomensaje['remitente']) && $contenidomensaje['remitente'] == $destinatario) {
            $bandejasaliente ++;
        }
    }
        

    return $bandejasaliente;
}
foreach ($_SESSION['usuarios'] as $usuario => $datosusuario) {

       
    $enlaceEscribir = "escribir.php?destinatario=" . $usuario;

    
    
    if (bandejaentrada ($usuario, $actual)  > 0) {
        $enlaceleer = '<a href="leer.php?remitente=' . $usuario . '">Leer</a>';
    } else {
        $enlaceleer = '';
    }

    if ($usuario != $_SESSION['_activo']) {

        echo $usuario . '(' . bandejaentrada($usuario, $actual) . ')&nbsp' . $enlaceleer . '&nbsp <a href="' . $enlaceEscribir . '">Escribir</a></br/>';
    }
}

echo <<<html
<p>
<a href="login.php">Volver al login</a>
html;
?>

