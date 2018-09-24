<?php


echo "Introduce el numero:";
fscanf(STDIN, "%d\n",$number);
echo "Da el formato:";
fscanf(STDIN, "%s\n",$format);

$i=0;
/*Formato de un array que contiene dos arrays dentro*/
$array =[
    "nombre"=>["uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","ciez"],
    "romano" => ["i","ii","iii","iv","v","vi","vii","viii","ix","x"] 
];

for ($i;$i<$number;$i++){
    echo $array[$format][$i]." ";
}
?>