<?php
require_once ('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

session_start();
$persona = $_SESSION['persona'];

if ($persona != null) {
    if ($persona->id == 0) {
        echo '<h1>ID inexistente</h1>';
    }
    else {
    echo <<<HTML
<h3>NOMBRE</h3>
<p>{$persona->nombre}</p>
<h3>APELLIDO</h3>
<p>{$persona->apellido}</p>
<h3>ESTATURA</h3>
<p>{$persona->estatura}</p>

HTML;
    }
} else {
    echo '<h1>ERROR</h1>';
}

?>



