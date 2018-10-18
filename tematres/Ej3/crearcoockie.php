<?php
$nombre = isset ( $_GET ['nombre'] ) ? $_GET ['nombre'] : null;
$contenido = isset ( $_GET ['contenido'] ) ? $_GET ['contenido'] : null;
$nivel = isset ( $_GET ['nivel'] ) ? $_GET ['nivel'] : null;

/*Si la variable nombre no es nulo, el contenido no es nulo  ni nivel no es nulo
 * Se saca la informacion de la url del server
 * En la variable ruta se recoge lo siguiente:
 * Si nivel es igual a 0 se recoge la ruta y se añade '/' o si no pregunta 
 * si nivel uno es igual a 1 devuelve la ruta  con  '/uno'*/
if ($nombre != null && $contenido != null && $nivel != null) {
    $rutaBase = pathinfo($_SERVER['REQUEST_URI'])['dirname'];
    $ruta = ($nivel==0?//if(nivel ==0 ){ rutabase = '/'}; else{if{
        $rutaBase.'/':
        //
        ($nivel==1?$rutaBase.'/uno/':$rutaBase.'/uno/dos/'));
    //set coockie es para añadir al coocki la ruta
    setcookie ( $nombre, $contenido, 0, $ruta );
    echo "<h1>Establecida cookie $nombre=$contenido en ruta $ruta</h1>";
}
else {
    if ($nombre==null) {
        echo "El nombre no puede ser nulo<br/>";
    }
    
    if ($contenido==null) {
        echo "El contenido no puede ser nulo<br/>";
    }
    
    if ($nivel==null) {
        echo "El nivel no puede ser nulo<br/>";
    }
    
}

?>
<a href="index.php">Volver</a>
