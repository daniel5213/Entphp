<h2>Lista de países de OTRO SITIO</h2>
<table border="1">
	<tr>
		<th>NOMBRE</th>
	</tr>

<?php foreach ($lp as $pais): ?>
  <tr><td><?= $pais->nombre ?></td></tr>
<?php endforeach;?>

</table>
<br>
<form action="crearPais" >
<input type="submit" value="crear">
</form>