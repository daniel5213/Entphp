<form action="nuevapersonaPost.php" method=post>
<label id="Nombre">Nombre</label><input type="text" name="nombre" id="Nombre" placeholder="introduce el nombre"><br/>
<fieldset>
<legend>Aficiones</legend>
<input type="checkbox" name="aficion[]" value="nadar">Nadar
<input type="checkbox" name="aficion[]" value="cine">Cine<br/>
<input type="checkbox" name="aficion[]" value="serie">Serie
</fieldset>
<input type="submit" value="Aceptar"/>
</form>