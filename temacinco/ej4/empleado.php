<form action="crearempleado.php" method=post>
	Número de empleado<input type="number" name="empleados" /><br /> Nombre<input
		type="text" name="nombre"><br /> Apellido<input type="text"
		name="apellido"><br /> Teléfono<input type="text" name="telefono"><br />
	Sexo<select name="sexo[]">
		<option value="h">Hombre</option>
		<option value="m">Mujer</option>
		</select><br />
		<input type="submit" value="Crear">
</form>