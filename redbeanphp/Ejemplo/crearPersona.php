<?php
require_once ('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

function pintarSelectPais($condicion)
{
    $paises = R::findAll('pais');
    $html = '';
    $html .= "<fieldset><legend>País en el que $condicion</legend>" . PHP_EOL;
    $html .= "<select name=\"idPais$condicion\">\n";
    $html .= "\t<option value=\"0\">Ninguno</option>\n";

    foreach ($paises as $pais) {
        $html .= "\t<option value=\"{$pais->id}\">{$pais->nombre}</option>\n";
    }
    $html .= '</select>';
    $html .= '</fieldset>';
    return $html;
}

function pintarSelectMultipleCoches()
{
    $coches = R::findAll('coche');

    $html = '<fieldset><legend>Coches que posee</legend>' . PHP_EOL;
    $html .= "<select multiple=\"multiple\" name=\"idsCoche[]\">\n";

    foreach ($coches as $coche) {
        if ($coche->persona == null) {
            $html .= "\t<option value=\"{$coche->id}\">{$coche->matricula}</option>\n";
        }
    }
    $html .= '</select>';
    $html .= '</fieldset>';
    return $html;

    return '';
}

function pintarSelectMultipleAficiones()
{
    $aficiones = R::findAll('aficion');

    $html = '<fieldset><legend>Aficiones que tiene</legend>' . PHP_EOL;
    $html .= "<select multiple=\"multiple\" name=\"idsAficion[]\">\n";

    foreach ($aficiones as $aficion) {
        $html .= "\t<option value=\"{$aficion->id}\">{$aficion->nombre}</option>\n";
    }

    $html .= '</select>';
    $html .= '</fieldset>';
    return $html;

    return '';
}

?>

<h3>Nueva persona</h3>
<form action="crearPersonaPost.php" method="post">
	NOMBRE
	<input type="text" name="nombre" />
	<br /> APELLIDO
	<input type="text" name="apellido" />
	<br /> ESTATURA
	<input type="number" name="estatura" />
	<br /> PESO
	<input type="number" name="peso" />
	<br />
	<?= pintarSelectPais('Nace') ?>
	<?= pintarSelectPais('Vive') ?>
	<?= pintarSelectMultipleCoches() ?>
	<?= pintarSelectMultipleAficiones() ?>
	
	<input type="submit" />
	<br />
</form>

<a href="menu.php">Volver al menú</a>