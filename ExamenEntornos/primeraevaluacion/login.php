<?php
session_start();
echo "<pre>";
print_r($_SESSION['usuario']);
echo "</pre>";
?>
<h1>LOGIN</h1>
<form action="loginPost.php" method="post">
	NOMBRE<input type="text" name="nombre" /><br /> CONTRASEÑA<input
		type="password" name="pwd" /><br /> <input type="submit"
		value="enviar">
</form>
<a href="registrar.php">Registrar</a>