<h1>País</h1>
<table border="1">
<tr>
<th>ID</th>
<th>NOMBRE</th>
</tr>

<?php foreach ($resultado as $pais): ?>
    <tr><td><?= $pais ['id']?></td><td><?= $pais ['nombre'] ?></td></tr>
<?php endforeach;?>

</table>