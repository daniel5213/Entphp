<h2>Actualizar coche</h2>
<form method="post" action="<?=base_url()?>coche/updatePost">
	<input type="hidden" name="id" value="<?=$coche->id?>"/>
	
	Matrícula
	<input type="text" name="matricula" required="required" value="<?=$coche->matricula ?>" />
	<br />
	
	Marca
	<input type="text" name="marca" required="required" value="<?=$coche->marca?>" />
	<br />
	
	Modelo
	<input type="text" name="modelo" required="required" value="<?=$coche->modelo?>" />
	<br />
	
	<input type="submit" />
</form>
