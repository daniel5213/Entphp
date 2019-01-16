
<div class="container">
	<div class="jumbotron">
		<div class="started">
		<form action="<?=base_url()?>usuario/crearPost" method="post">
		<label for="email">Correo</label>
		<input type="text" name="email"/><br>
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre"/><br>
		<label for="pwd">Contraseña</label>
		<input type="text" name="pwd"/><p>
		<p><p>
		<input type="submit" />
		<button type="reset" class="btn btn-secondary">Borrar</button>
		
		</form>
		</div>
		<div class="started-info">
		<h1>Nota importante<b>!!</b></h1>
		<p>
		<b>Ten cuidado</b> con olvidarte la contraseña no se te recuperará ahora</div>
	</div>
</div>

