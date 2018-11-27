<?php
require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$filtro = isset($_GET['filtro'])?$_GET['filtro']:'';

$personas = R::find('persona','nombre like :mifiltro',[ ':mifiltro' => "%$filtro%" ] );

echo <<<HTML
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>estatura</th>
    </tr>
HTML;

foreach ($personas as $persona) {
    echo '<tr>';
    echo '<td>';
    echo $persona->nombre;
    echo '<td>';
    echo $persona->apellido;
    echo '</td>';
    echo '<td>';
    echo $persona->estatura;
    echo '</td>';
    echo '</tr>';
}
?>