<?php

echo <<<OUT
<html>
<head>
<meta charset="utf-8">
<script>
	var conexion;
	function accionAJAX() {
		textoRecibido = conexion.responseText;
		document.getElementById("idProvincias").innerHTML=textoRecibido;
	}
	
	function introducirDatos() {
		nombre = document.getElementById('sustantivo').value;
		conexion = new XMLHttpRequest();
		conexion.open('GET', 'Tabla.php?ca='+nombre, true);
		conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		conexion.send();
		conexion.onreadystatechange = function() {
			if (conexion.readyState==4 && conexion.status==200) {
				accionAJAX();
			}
		}
	}	

</script>
		
</head>
<body>
<form>
Introduce un sustantivo regular<input type="text" id="sustantivo" name="sustantivo"/><br/>
<input type="button" value="enviar" onclick="introducirDatos();"/>
</form>
</body>
OUT;




?>