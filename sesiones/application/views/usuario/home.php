
<div class="container">
	<div class="jumbotron">
				<?php foreach ($sentencia as $sen): ?>
					<h3>Bienvenido: <?= $sen?></h3>
				<?php endforeach;?>
				<a href="<?php base_url()?>usuario/crear">Nuevo usuario</a>
	</div>
</div>
