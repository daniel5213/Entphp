<h2>Lista de country</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Nombre</th>
		
	</tr>
	
	<?php foreach ($contries as $country): ?>
		<tr>
			<td>
				<?= $country->name ?>
			</td>
			
		
	<?php endforeach;?>
	
</table>
<a href="<?=base_url()?>country/crear" class="btn btn-success">Create new county</a>