<h1>Personas</h1>
<table border="1">
<tr>
<th>ID</th>
<th>NOMBRE</th>
<th>PAIS</th>
</tr>

<?php foreach ($resultado as $persona): ?>

    <tr><td><?= $persona ['id']?></td><td><?= $persona ['nombre'] ?></td><td><?=is_null($persona->pais)?'--':$persona->pais->nombre ?></td></tr>

<?php endforeach;?>

</table>