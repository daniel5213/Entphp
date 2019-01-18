<h2>Actualizar país</h2>
<form method="post" action="<?=base_url()?>pais/updatePost">
	Nombre
	<input type="hidden" name="id" value="<?=$pais->id?>"/>
	<input type="text" name="nombre" required="required" value="<?=$pais->nombre ?>" />
	<br />
	<input type="submit" />
</form>
