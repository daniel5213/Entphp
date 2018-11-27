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
<form action="modificarPost.php" method="post">
    <h3>NOMBRE</h3>
    <input type="text" name="nom" value="{$persona->nombre}"/>
    <h3>APELLIDO</h3>
    <input type="text" name="ape" value="{$persona->apellido}"/>
    <h3>ESTATURA</h3>
    <input type="number" name="est" value="{$persona->estatura}"/>

    <input type="hidden" name="id" value="{$persona->id}"/> 

    <input type="submit" value="Modificar">
</form>

HTML;
    }
} else {
    echo '<h1>ERROR</h1>';
}
?>