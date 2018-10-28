<?php
session_start();

$usuarioactivo = $_SESSION['_activo'];

$usuariodestinatario = $_GET{'name'};

/*
 * $url = explode('?', $url);
 * $destinatario = '';
 *
 *
 * for ($i = 0; $i < sizeof($url); $i ++) {
 *
 * if ($i == 1) {
 * $destinatario = $url[$i];
 * $_SESSION['usuariodestinatario']=$destinatario;
 * }
 * }
 * $usuariodestinatario=$_SESSION['usuariodestinatario'];
 */

echo <<<html
<h4>Usuario Actual como $usuarioactivo</h4>
<form action="escribirPost.php" method="post">
	<label id="De">De:</label> 
	<input type="text" name="remitente"	value="$usuarioactivo" readonly="readonly" /><br />
	<label id="Para">De: </label>
	<input type="text" name="destinatario" value="$usuariodestinatario" readonly="readonly" /><br />
	<textarea rows="120px" cols="90px"		placeholder="Escribe el contenido del mensaje" name="mensaje"></textarea>
	<br /> <input type="submit" />
</form>
html;
?>