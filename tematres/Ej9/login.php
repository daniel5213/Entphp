<?php
/*
 * if ($_SESSION['recordar']=="1") {
 * $recordar = $_SESSION['recordar'];
 * $linea = "<input name='nombre' type='text' value='$recordar'/>";
 * } else {
 * $linea = "<input name='nombre' type='text'
 * placeholder='Introduce nombre'/>";
 * }
 */
echo <<<html
<h1>LOGIN</h1>

<form action="loginPost.php" method="post">
	<label>Nombre</label> <input name='nombre' type='text'
		placeholder='Introduce nombre'/><br /> <label>Contraseña</label> <input
		name="pwd" type="password" placeholder="Introduce contraseña" /><br />
	<label>Recordar</label> <input type="checkbox" name="guardar_clave" value="1"><br /> <input
		type="submit" value="Enviar" />
</form>
<p>
	<a href="registrar.php">Registrar Nuevo usuario</a>
	
html;
?>