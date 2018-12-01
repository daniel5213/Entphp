<h1>Personas</h1>
<table border="1">
<tr>
<th>ID</th>
<th>NOMBRE</th>
</tr>

<?php foreach ($resultado as $persona): ?>
    <tr><td><?= $persona ['id']?></td><td><?= $persona ['nombre'] ?></td></tr>
<?php endforeach;?>

</table>