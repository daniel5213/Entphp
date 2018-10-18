<?php
session_start();
$colorseleccionado='';

if (isset($_SESSION['usuario'])) {

    $nombre = $_SESSION['usuario'];
    
    if (isset($_SESSION['color'])) {
        
        $colorseleccionado = $_SESSION['color'];

        
    }
} else {
    header('Location:login.php');
}
function pintar_select(){
    global $colorseleccionado;
    $colores=['rojo','amarillo','ninguno','verde'];
    $html=<<<HTML
    <select id="id-select" name="color">"
HTML;
    foreach ($colores as $color){
    $html.="<option id=\"$color\" value=\"$color\"";
        if($color==$colorseleccionado){
            $html.='selected=\"selected\"';
    }
    $html .= ">".strtoupper($color)."</option>\n";
}
$html .="</select></br>";
return $html;
}
?>

<h2>Hola <?= $nombre ?></h2>

<form action="salir.php" method="post">
<label for="id-select">Color favorito</label>
<?= pintar_select()?>
<input type="submit">
</form>