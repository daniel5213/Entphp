<?php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>"?>

<form action="productopost.php" method="post">
	Nombre--><input type="text" name="nombre" /><br /> Precio--><input
		type="text" name="precio" /><br /> <input type="submit" name="accion"
		value="preparar" /> 
		<input type="submit" name="accion"
		value="insertar" />

</form>