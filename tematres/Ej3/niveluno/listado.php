
Listado de cookies de nivel <b>Entphp/tematres/Ej3/niveluno</b>
<table border="1">
<tr>
<th>Nombre Cookie</th>
<th>Contenido Cookie</th>
</tr>


<?php 

foreach ($_COOKIE as $u => $k){
    echo "<tr><td>$u</td><td>$k</td></tr>";
}
?>

</table>
<a href="../Inicio.php">Volver</a>