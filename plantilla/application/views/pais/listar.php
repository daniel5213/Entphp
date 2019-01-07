<h2>Lista de países</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
	
	<?php foreach ($paises as $pais): ?>
		<tr>
			<td>
				<?= $pais->nombre ?>
			</td>
			<td class="form-inline text-center">
				<form action="<?=base_url()?>pais/update" method="post">
					<button><img src="<?=base_url()?>assets/img/edit.png" width="10" height="15"/></button>
					<input type="hidden" name="id" value="<?=$pais->id ?>"/>
				</form>
				<form action="<?=base_url()?>pais/delete" method="post">
					<button><img src="<?=base_url()?>assets/img/trash.png" width="10" height="15"/></button>
					<input type="hidden" name="id" value="<?=$pais->id ?>"/>
				</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<a href="<?=base_url()?>pais/crear" class="btn btn-success">Crear nuevo Pais</a>