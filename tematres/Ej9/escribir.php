<?php
session_start();

$usuarioactivo = $_SESSION['_activo'];

$usuariodestinatario = $_GET{'destinatario'};

echo <<<html
<h4>Usuario Actual como $usuarioactivo</h4>
<form action="escribirPost.php" method="post">
	<label id="De">De:</label> 
	<input type="text" name="remitente"	value="$usuarioactivo" readonly="readonly" /><br />
	<label id="Para">De: </label>
	<input type="text" name="destinatario" value="$usuariodestinatario" readonly="readonly" /><br />
	<textarea placeholder="Escribe el contenido del mensaje" name="mensaje" rows="4" cols="20"	></textarea>
	<br /> <input type="submit" />
</form>
html;
?>