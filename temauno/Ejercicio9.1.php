<?php
include 'Ejercicio9.php';
$number =0;
$format= ' ' ;

echo "Introduce el numero:";
fscanf(STDIN, "%d\n",$number);

echo "Da el formato:";
fscanf(STDIN, "%s\n",$format);

/*Strtoslower: es una funcion para cambiar la cadena caracteres a minusculas*/
$format = strtolower ($format);

for ($i=0;$i<$number;$i++){
    echo $array[$format][$i]." ";
}
?>