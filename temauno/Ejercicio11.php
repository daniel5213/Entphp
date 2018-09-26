<?php
/*Dada una cadena del estilo
    “Nombre:Apellido:Telefono//OtroNombre:OtroApellido:OtroTelefono// ....... ”
    Hacer un programa que muestre los datos de forma legible:
*/


$cadena="Daniel:Alvarez:695185431//Yolanda:Santiago:656496104";
$family= explode("//", $cadena);

foreach ($family as $family){
    $datos= explode(":", $family);
    
    echo "---------\n";
    echo "Nombre: ".$datos[0]."\n";
    echo "Apellido: ".$datos[1]."\n";
    echo "Telefono: ".$datos[2]."\n";
    
}

       
    

?>