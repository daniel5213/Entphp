<h2>Actualizar persona</h2>
<form method="post" action="<?=base_url()?>persona/updatePost">
	<input type="hidden" name="id" value="<?=$persona->id?>"/>
	
	DNI
	<input type="text" name="dni" required="required" value="<?=$persona->dni ?>" />
	<br />
	
	Nombre
	<input type="text" name="nombre" required="required" value="<?=$persona->nombre ?>" />
	<br />
	
	Apellido
	<input type="text" name="apellido" required="required" value="<?=$persona->apellido ?>" />
	<br />
	
	<input type="submit" />
</form>
