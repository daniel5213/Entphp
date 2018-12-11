
<h2>Nueva persona</h2>
<form method="post" action="<?=base_url()?>persona/crearPost">

	DNI <input type="text" name="dni" required="required">	<br />

	Nombre	<input type="text" name="nombre" required="required">	<br />

	Apellido	<input type="text" name="apellido" required="required">	<br />

	País de nacimiento 
	<select name="pais">
		<?php foreach ($paises as $pais): ?>
			<option value="<?= $pais->id ?>"><?= $pais->nombre ?></option>
		<?php endforeach;?>
	</select>
	<br/>

	<fieldset><legend>Coches que posee</legend> 
		<?php foreach ($coches as $coche): ?>
			<input type="checkbox" name="coche[]" id="id-<?=$coche->id?>" value="<?=$coche->id?>">
			<label for="id-<?=$coche->id?>"><?=$coche->matricula.'('.$coche->marca.' '.$coche->modelo.')'?></label>			
		<?php endforeach;?>
	</fieldset>
	<br/>
	 
	<button class="btn btn-primary">Crear persona</button>
</form>
