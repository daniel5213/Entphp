<h2>Lista de personas</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>DNI</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Estatura</th>
		<th>Edad</th>
		<th>País nac.</th>
		<th>Coches que posee</th>
		<th>Aficiones</th>
		<th>Acciones</th>
	</tr>
	
	<?php foreach ($personas as $persona): ?>
		<tr>
			<td>
				<?= $persona->dni ?>
			</td>

			<td>
				<?= $persona->nombre ?>
			</td>

			<td>
				<?= $persona->apellido?>
			</td>
			
			<td>
				<?= $persona->estatura?>
			</td>

			<td>
				
				
				<?= $edad[$persona->id]?>
			</td>

			<td>
				<?php if ($persona->nace != null): ?>
					<?= $persona->nace->nombre ?>
				<?php endif;?>
			</td>
			
			<td>
				<?php foreach ($persona->alias('poseecoche')->ownCocheList as $coche): ?>
					<?=$coche->matricula.'('.$coche->marca.' '.$coche->modelo.')' ?>
				<?php endforeach;?>
			</td>
			
			<td>
				<!-- REPETIDO, para que tengáis las dos versiones
				<?php foreach ($persona->ownPracticaList as $practica): ?>
					<?=$practica->aficion->nombre?>
				<?php endforeach;?>
				 -->
				<?php foreach ($persona->aggr('ownPracticaList','aficion') as $aficion): ?>
					<?=$aficion->nombre?>
				<?php endforeach;?>
			</td>
			
			
			<td class="form-inline text-center">
				<form action="<?=base_url()?>persona/update" method="post">
					<button><img src="<?=base_url()?>assets/img/edit.png" width="10" height="15"/></button>
					<input type="hidden" name="id" value="<?=$persona->id ?>"/>
				</form>
				<form action="<?=base_url()?>persona/delete" method="post">
					<button><img src="<?=base_url()?>assets/img/trash.png" width="10" height="15"/></button>
					<input type="hidden" name="id" value="<?=$persona->id ?>"/>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>