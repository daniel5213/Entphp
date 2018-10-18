<html>
<h2>Listado de coockies por nivel</h2>
Nivel0---><a href='listado.php'>Listado de coockies</a></br>
nivel0--->Nivel1---><a href='niveluno/listado.php'>Listado de coockies</a></br>
nivel0--->Nivel1--->Nivel2---><a href='niveluno/niveldos/listado.php'>Listado de coockies</a></br>
<p>
<h1>Creacion de coockies en diferentes niveles por script</h1>
<form action="#">
<fieldset>
<legend>Creacion de coockies</legend>
<label for="nombre">Nombre </label><input type="text" id="nombre"/>
<label for="contenido">Contenido </label><input type="text" id="contenido"/></br>
Nivel
<select>
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