<?php 
require_once '../ej1/llamada.php';
function mostar_filasinsertadas() {
    $db=conectarMySql();
    $html='';
    $sql= <<<html
<table border="1">
<tr>
<td>Nombre</td>
<td>Precio</td></tr>
html;
    $sql=<<<sql
    select nombre, precio from productos
sql;
    $filas=$db->query($sql);
    foreach ($filas as $fila){
            $html.="<tr>
            <td>{$filas['nombre']}</td>
            <td>{$filas['precio']}</td></tr>";
        
    }
            $html="</table>";
            return $html;
}
?>

<form>
NOMBRE <input type="text" name="nombre"/>
PRECIO <input type="text" name="precio"/>
<input type="submit" value="insertar"/>
</form>
<?php 'mostar_filasinsertadas'?>