<h2>List of Cities</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>Name</th>
		<th>Country</th>
		
	</tr>
	
	<?php foreach ($cities as $city): ?>
		<tr>
			<td>
				<?= $city->name ?>
			</td>
			<td>
				<?php if ($city->country != null): ?>
					<?= $city->country->name ?>
				<?php endif;?>
			</td>
					</tr>
	<?php endforeach;?>
	<br><br>
	
</table>
<a href="<?=base_url()?>city/crear" class="btn btn-primary">Create new City</a>