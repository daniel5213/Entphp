<html>
<h4> <?php pathinfo($_SERVER['REQUEST_URI'])['dirname']?></h4>
<h2>Listado de coockies por nivel</h2>
Nivel0--->
<a href='listado.php'>Listado de coockies</a><br/>
nivel0--->Nivel1--->
<a href='niveluno/listado.php'>Listado de coockies</a><br/>
nivel0--->Nivel1--->Nivel2--->
<a href='niveluno/niveldos/listado.php'>Listado de coockies</a><br/>
<p>
<h1>Creacion de coockies en diferentes niveles por script</h1>
<form action="crearcoockie.php">
<fieldset>
<legend>Creacion de coockies</legend>
<label for="nombre">Nombre </label><input type="text" id="nombre" name="nombre"/>
<label for="contenido">Contenido </label><input type="text" id="contenido" name="contenido"/><br/>
<label for="nivel">Nivel</label>
<select name="nivel">
<optgroup label="nivel">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
</optgroup>
</select>
<input type="submit" value="crear coockie"/>
</fieldset>
</form>
</html>