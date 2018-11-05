<html>
<head>
<meta charset="utf-8">
<script type="text/javascript">
var sustantivo;
function mas() {
    sustantivo = document.getElementById('sustantivo').value;
    conexion = new XMLHttpRequest();
    conexion.open('POST', '../Ej1/helper.php?sustantivo='+sustantivo, true);
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
<label id="sustantivo">Introduce un sustantivo regular</label>
<input type="text" id="sustantivo" name="sustantivo"/>
<button onclick="mas();">Mas</input>
</form>
</body>
</html>