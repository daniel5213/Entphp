
<h2>New city</h2>
<form method="post" action="<?=base_url()?>city/crearPost">
	Name
	<input type="text" name="name" required="required">
	<br />
	
	Countries 
	<select name="country">
		<?php foreach ($countries as $country): ?>
			<option value="<?= $country->id ?>"><?= $country->name ?></option>
		<?php endforeach;?>
	</select><br><br>
	<button type="submit" class="btn btn-primary">Crear</button> <a href="<?=base_url()?>city/listar" class="btn btn-primary">Cancelar</a>
	<br/>
</form>
