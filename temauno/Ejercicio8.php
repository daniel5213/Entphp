<?php
$d=0;
$m=0;
$y=0;

echo "Introduce el dia:";
fscanf(STDIN, "%d\n",$d);
echo "Introduce el mes:";
fscanf(STDIN, "%d\n",$m);
echo "Introduce el año:";
fscanf(STDIN, "%d\n",$y);

//Para pasar los dias a segundos la formula es 1 dia =  86400, 1 Meses = 2629800 Segundos,1 Años = 31557600 Segundos
function convertirDiasaSegundos($d,$m,$y){
    $segundosdias=$d*86400;
    $segundosmeses=$m*2629800;
    $segundosaños=$y*31557600;
    $segundostotal=$segundosmeses+$segundosaños+$segundosdias;
    echo "Los segundos totales son ".$segundostotal;
    $minutos=$segundostotal/60;
    echo "Los minutos son: $minutos";
    $hora=$minutos/60;
    echo "Los años: $hora";
}
convertirDiasaSegundos($d,$m,$y);

?>