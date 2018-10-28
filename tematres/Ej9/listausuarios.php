<?php
session_start();
$actual = $_SESSION['_activo'];

$usuarios = $_SESSION['usuarios'];
echo "==============Array Usuarios conectados=================";
echo "<pre>";
print_r($actual);
echo "</pre>";
echo "==============Array Usuarios creados=================";
echo "<pre>";
print_r($usuarios);
echo "</pre>";
echo "=============Listado=================";

echo "<h4>Usuario Actual como $actual</h4>";

echo <<<HTML
<h3>Lista de usuarios/mensajes</h3>
<table>
HTML;
foreach ($usuarios as $usuario => $infousuario) {
    if ($usuario != $actual) {

        foreach ($infousuario as $contenidoinfo => $arrayinfo) {
            if ($contenidoinfo == 'mensajes') {

                $numerosize = sizeof($arrayinfo);
                if ($numerosize > 0) {

                    echo "<tr><td>$usuario</td><td>($numerosize)</td>
                <td><a href='leer.php?name=$usuario'>Leer</a></td> 
                <td><a href='escribir.php?name=$usuario'>Escribir</a></td></tr></table>";
                } else {

                    echo "</br><tr><td>$usuario</td><td>($numerosize)</td>
                   <td><a href='escribir.php/?name=$usuario'>Escribir</a></td>
                </tr></table>";
                }
            }
        }
    }
}

?>

