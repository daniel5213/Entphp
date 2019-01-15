
<h2>Nueva persona</h2>

<form method="post" action="<?=base_url()?>persona/crearPost">

	DNI <input type="text" name="dni" required="required">	<br />

	Nombre	<input type="text" name="nombre" required="required">	<br />

	Apellido	<input type="text" name="apellido" required="required">	<br />

	Estatura <input type="number" min="0" max="300" value="170" name="estatura">	<br />

	Fecha de nacimiento	<input type="date" name="fnac">	<br />

	

	País de nacimiento 
	<select name="pais">
		<?php foreach ($paises as $pais): ?>
			<option value="<?= $pais->id ?>"><?= $pais->nombre ?></option>
		<?php endforeach;?>
	</select>
	<br/>

	<fieldset><legend>Coches Disponibles</legend> 
		<?php foreach ($coches as $coche): ?>
			<input type="checkbox" name="coche[]" id="id-<?=$coche->id?>" value="<?=$coche->id?>">
			<label for="id-<?=$coche->id?>"><?=$coche->matricula.'('.$coche->marca.' '.$coche->modelo.')'?></label>			
		<?php endforeach;?>
	</fieldset>
	<br/>

	<fieldset><legend>Aficiones</legend> 
		<?php foreach ($aficiones as $aficion): ?>
			<input type="checkbox" name="aficion[]" id="id-<?=$aficion->id?>" value="<?=$aficion->id?>">
			<label for="id-<?=$aficion->id?>"><?=$aficion->nombre?></label>			
		<?php endforeach;?>
	</fieldset>
	<br/>

	<input type="submit" />
</form>
