<?php 
function tieneAficion($idAficion,$persona) {
    $sol = false;
    foreach ($persona->ownPracticaList as $practica) {
        $sol = $sol ||  $practica->aficion->id == $idAficion;
    }
    return $sol;
}

?>

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

	País de nacimiento 
	<select name="pais">
		<?php foreach ($paises as $pais): ?>
			<option value="<?= $pais->id ?>" 
			     <?php if ($persona->nace != null && $persona->nace->id == $pais->id):?> 
			     	selected="selected" 
			     <?php endif;?>
			     >
			     <?= $pais->nombre?>
		<?php endforeach;?>
	</select>
	
	<fieldset><legend>Coches que posee</legend>
		<!--  Coches que ya tengo  -->
		<?php foreach ($persona->alias('poseecoche')->ownCocheList as $coche): ?>
			<input type="checkbox" name="coche[]" id="idco-<?=$coche->id?>" value="<?=$coche->id?>" checked="checked">
			<label for="idco-<?=$coche->id?>"><?=$coche->matricula.'('.$coche->marca.' '.$coche->modelo.')'?></label>			
		<?php endforeach;?>
			  <legend>Coches disponibles</legend>
		<!--  Coches disponibles -->
		<?php foreach ($coches_disponibles as $coche): ?>
			<input type="checkbox" name="coche[]" id="idco-<?=$coche->id?>" value="<?=$coche->id?>">
			<label for="idco-<?=$coche->id?>"><?=$coche->matricula.'('.$coche->marca.' '.$coche->modelo.')'?></label>			
		<?php endforeach;?>
	</fieldset>
	
	<fieldset><legend>Aficiones</legend>
		<?php foreach ($aficiones as $aficion): ?>
			<input type="checkbox" name="aficion[]" id="idaf-<?=$aficion->id?>" value="<?=$aficion->id?>" 
			<?php if (tieneAficion($aficion->id, $persona)):?>
				checked="checked"
			<?php endif;?>
			>
			<label for="idaf-<?=$aficion->id?>"><?=$aficion->nombre?></label>			
		<?php endforeach;?>
	</fieldset>
	
	<br />
	
	<input type="submit" />
</form>
