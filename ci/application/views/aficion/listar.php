<h2>Lista de aficiones</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Nombre</th>
		<th>Estatura Media</th>
		<th>Edad Media</th>
		<th>Acciones</th>
	</tr>
	
	<?php foreach ($aficiones as $aficion): ?>
		<tr>
			<td>
				<?= $aficion->nombre ?>
			</td>
			<td><?php 
			$sql = <<<SQL
    SELECT avg(estatura) from persona,practica where aficion_id=$aficion->id 

SQL;
			$sql=R::getAssoc($sql);
			foreach ($sql as $resultado){
            echo $resultado.",";
			}
			?></td>
			<td>-----</td>
			<td class="form-inline text-center">
				<form action="<?=base_url()?>aficion/update" method="post">
					<button><img src="<?=base_url()?>assets/img/edit.png" width="10" height="15"/></button>
					<input type="hidden" name="id" value="<?=$aficion->id ?>"/>
				</form>
				
				<form action="<?=base_url()?>aficion/delete" method="post">
					<button><img src="<?=base_url()?>assets/img/trash.png" width="10" height="15"/></button>
					<input type="hidden" name="id" value="<?=$aficion->id ?>"/>
				</form>
			</td>
			
		</tr>
	<?php endforeach;?>
</table>