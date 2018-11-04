<?php


?>

<script>

function pelicula() {

	pelicula = document.getElementById('peli').value;
	conexion = new XMLHttpRequest();
	conexion.open("POST","ajax.php",true);
	conexion.setRequestHeader('X-Requested-With','XMLHttpRequest');
	
	conexion.send("peli="+pelicula);

	conexion.onreadystatechange = function() {
		if (conexion.readyState == 4 && conexion.status==200) {
			respuesta = conexion.responseText;
			
				
				document.getElementById("peli").value = respuesta;
				
			
			
		}
	}
	
}
</script>


<button onclick="pelicula()">Peli favorita</button><input type="text" id="peli" value="titanic"/><br/>
<div id="panel"/>


