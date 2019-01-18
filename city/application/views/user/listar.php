<h2>Lista de users</h2>
<table class="table table-striped table-bordered">
	<tr>
		<th>DNI</th>
		<th>Nombre</th>
		<th>Born</th>
		<th>Cities(travelled)</th>
		
	</tr>
	
	<?php foreach ($users as $user): ?>
		<tr>
			<td>
				<?= $user->dni ?>
			</td>

			<td>
				<?= $user->name ?>
			</td>

			<td>
				<?php if ($user->city != null): ?>
					<?= $user->city->name ?>
				<?php endif;?>
			</td>
			<td>
			<?php foreach ($user->alias('poseecity')->ownCityList as $travel): ?>
					<?=$travel->name?>
				<?php endforeach;?>
</td>			
		</tr>
	<?php endforeach;?>
</table>
<a href="<?=base_url()?>user/crear" class="btn btn-primary">Create new User</a>