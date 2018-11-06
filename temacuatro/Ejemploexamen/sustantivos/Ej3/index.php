<script>

function r() {
	palabra = document.getElementById('palabra').value;
	conexion = new XMLHttpRequest();
	conexion.open("POST","ajaxRaiz.php",true);
	conexion.setRequestHeader('X-Requested-With','XMLHttpRequest');
	conexion.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	conexion.send("palabra="+palabra);

	conexion.onreadystatechange = function() {
		if (conexion.readyState == 4 && conexion.status==200) {
			respuesta = conexion.responseText;
			
				document.getElementById('panel').innerHTML = respuesta;
			
		}
	}
	
}

function c() {
	palabra = document.getElementById('palabra').value;
	conexion = new XMLHttpRequest();
	conexion.open("POST","ajaxCombi.php",true);
	conexion.setRequestHeader('X-Requested-With','XMLHttpRequest');
	conexion.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	conexion.send("palabra="+palabra);

	conexion.onreadystatechange = function() {
		if (conexion.readyState == 4 && conexion.status==200) {
			respuesta = conexion.responseText;
			
				document.getElementById('panel').innerHTML = respuesta;
			
		}
	}
	
}
</script>

<h1>Palabra secreta</h1>
Introduce una palabra
<input type="text" id="palabra">
<br />
<button onclick="r()">Raiz</button>
<button onclick="c()">Combinar</button>
<div id="panel"></div>




