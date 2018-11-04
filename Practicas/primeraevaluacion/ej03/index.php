<script>
function pelicula() {
	conexion = new XMLHttpRequest();
	conexion.open("POST","ajax.php",true);
	conexion.setRequestHeader('X-Requested-With','XMLHttpRequest');
	conexion.send();
	conexion.onreadystatechange = function() {
		if (conexion.readyState == 4 && conexion.status==200) {
			respuesta = conexion.responseText;
				document.getElementById("peli").value = respuesta;
		}
	}
}
</script>


<button onclick="pelicula()">Peli favorita</button>
<input type="text" id="peli" readonly="readonly" />
<br />
<div id="panel" />


