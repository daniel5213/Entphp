<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Database</title>
	</head>
	<body>
		<h3>Introduce un sustantivo regular</h3>
		<input type="text" name="sustantivo" id="sustantivo">
		<br>
		<br>
		<input type="button" id="raiz" value="raiz">
		<input type="button" id="conbinar" value="conbinar">
		<div id="r"></div>
		<p>...Observa resultado</p>
		
		<script type="text/javascript">

		var texto = document.getElementById('sustantivo');
		var raiz = document.getElementById('raiz');
		var conbinar = document.getElementById('conbinar');
		var r = document.getElementById('r');
		
		raiz.onclick = function(){
			ajax(this.value);
		}

		conbinar.onclick = function(){
			ajax(this.value);
		}
		
		function ajax(boton){
			var conexion = new XMLHttpRequest();
			
			conexion.open('GET', 'util.php?sustantivo='+texto.value+'&boton='+boton, true);
			conexion.send();
			conexion.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     	r.innerHTML = "";
					r.innerHTML = conexion.responseText;
				}
			
			}
		}
		
		</script>
	</body>
</html>