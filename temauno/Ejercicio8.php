<?php
$d=0;
$m=0;
$y=0;

echo "Introduce el dia:";
fscanf(STDIN, "%d\n",$d);
echo "Introduce el mes:";
fscanf(STDIN, "%d\n",$m);
echo "Introduce el a�o:";
fscanf(STDIN, "%d\n",$y);

//Para pasar los dias a segundos la formula es 1 dia =  86400, 1 Meses = 2629800 Segundos,1 A�os = 31557600 Segundos
function convertirDiasaSegundos($d,$m,$y){
    $segundosdias=$d*86400;
    $segundosmeses=$m*2629800;
    $segundosa�os=$y*31557600;
    $segundostotal=$segundosmeses+$segundosa�os+$segundosdias;
    echo "Los segundos totales son ".$segundostotal;
    $minutos=$segundostotal/60;
    echo "Los minutos son: $minutos";
    $hora=$minutos/60;
    echo "Los a�os: $hora";
}
convertirDiasaSegundos($d,$m,$y);

?>