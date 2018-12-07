<h2>Lista de coches</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>MATRICULA</th>
		<th>MARCA</th>
		<th>MODELO</th>
		<th>Acciones</th>
	</tr>
	
	<?php foreach ($coches as $coche): ?>
		<tr>
			<td>
				<?= $coche->matricula ?>
			</td>

			<td>
				<?= $coche->marca ?>
			</td>

			<td>
				<?= $coche->modelo?>
			</td>
			
			<td class="form-inline text-center">
				<form action="<?=base_url()?>coche/update" method="post">
					<button><img src="<?=base_url()?>assets/img/edit.png" width="10" height="15"/></button>
					<input type="hidden" name="matricula" value="<?=$coche->matricula ?>"/>
				</form>
				<form action="<?=base_url()?>coche/delete" method="post">
					<button><img src="<?=base_url()?>assets/img/trash.png" width="10" height="15"/></button>
					<input type="hidden" name="matricula" value="<?=$coche->matricula ?>"/>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>