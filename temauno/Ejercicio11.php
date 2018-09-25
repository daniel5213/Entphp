<?php
/*Dada una cadena del estilo
    “Nombre:Apellido:Telefono//OtroNombre:OtroApellido:OtroTelefono// ....... ”
    Hacer un programa que muestre los datos de forma legible:
*/

$nom='';$ape='';$tel=0;
$cadena="Daniel:Alvarez:695185431//Yolanda:Santiago:656496104";

$arrayInfo=[
    "info1"=>["Daniel","Alvarez",695185431]
];

for ($i=0;$i<3;$i++){
    echo $i;
    if ($i = 0){
        echo "Nombre: ".$arrayInfo['info1'][$i]."\n";
    }
    echo $arrayInfo['info1'][$i]."\n";

       
    
}
?>