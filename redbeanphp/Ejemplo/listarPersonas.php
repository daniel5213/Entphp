<?php
require_once('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$personas = R::findAll('persona');

$sql = <<<SQL
select count(*) as np
from persona p
where 
    nace_id is not null and

    (select count(*) as nc
    from coche
    where persona_id = p.id) > 0 and

    (select count(*) as na
    from aficion_persona
    where persona_id = p.id) > 0
SQL;

$ng = R::getCell($sql);

R::debug();

echo <<<HTML
<h3>Listado de TODAS las personas (Nº de pers.guays = $ng</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Estatura</th>
        <th>Peso</th>
        <th>País nacimiento</th>
        <th>País residencia</th>
        <th>Coches</th>
        <th>Aficiones</th>
    </tr>
HTML;



foreach ($personas as $persona) {
    echo '<tr>';
    
    echo '<td>';
    echo $persona->id;
    echo '</td>';
    
    echo '<td>';
    echo $persona->nombre;
    echo '</td>';
    
    echo '<td>';
    echo $persona->apellido;
    echo '</td>';
    
    echo '<td>';
    echo $persona->estatura;
    echo '</td>';
    
    echo '<td>';
    echo $persona->peso;
    echo '</td>';

    echo '<td>';
    echo is_null($persona->nace)?'--':$persona->fetchAs('pais')->nace->nombre;
    echo '</td>';
    
    echo '<td>';
    echo is_null($persona->vive)?'--':$persona->fetchAs('pais')->vive->nombre;
    echo '</td>';
    
    echo '<td>';
    $coches = '';
    foreach ($persona->ownCocheList as $coche) {
        $coches .= ($coche->matricula.' ');
    }
    echo $coches;
    echo '</td>';
    
    echo '<td>';
    $aficiones = '';
    foreach ($persona->sharedAficionList as $aficion) {
        $aficiones .= ($aficion->nombre.' ');
    }
    echo $aficiones;
    echo '</td>';
    
    
    echo '</tr>';
}
echo '</table>'.PHP_EOL;
echo '<a href="menu.php">Volver al menú</a>';
?>