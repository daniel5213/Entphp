<?php
session_start();
$usuario_actual = $_SESSION['_activo'];
if ($usuario_actual == null || empty($usuario_actual)) {
    header('Location:accesono.php');
}
?>

<script>

function comprobar() {
	nombre = document.getElementById('nombre').value;
	conexion = new XMLHttpRequest();
	conexion.open("POST","ajaxCompr.php",true);
	conexion.setRequestHeader('X-Requested-With','XMLHttpRequest');
	conexion.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	conexion.send("nombre="+nombre);

	conexion.onreadystatechange = function() {
		if (conexion.readyState == 4 && conexion.status==200) {
			respuesta = conexion.responseText;
			
				document.getElementById('panel').innerHTML = respuesta;
			
		}
	}
	
}
</script>

<h1>CAMBIO DE CONTRASEÑA</h1>
<form>
	Nombre de usuario <input type="text" id="nombre" onkeyup="comprobar()">

</form>