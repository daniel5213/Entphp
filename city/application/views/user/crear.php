<h2>New user</h2>

<form method="post" action="<?=base_url()?>user/crearPost">

	DNI <input type="text" name="dni" required="required">	<br />

	USER<input type="text" name="name" required="required">	<br />

	BORN
	<select name="city">
		<?php foreach ($cities as $city): ?>
			<option value="<?= $city->id ?>"><?= $city->name ?></option>
		<?php endforeach;?>
	</select><br>
	<fieldset><legend>Travel</legend> 
		<?php foreach ($cities as $city): ?>
			<input type="checkbox" name="travel[]" id="id-<?=$city->id?>" value="<?=$city->id?>">
			<label for="id-<?=$city->id?>"><?=$city->name?></label>			
		<?php endforeach;?>
	</fieldset>
	<br/>

		<button type="submit" class="btn btn-primary">Crear</button> <a href="<?=base_url()?>user/listar" class="btn btn-primary">Cancelar</a>
</form>
