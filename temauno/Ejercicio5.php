<?php

$num=0;$p=0;
function carta($posicion) {
    $sol='_';
    switch ($posicion){
    case 1 : $sol='as';break;
    case 2 : $sol='dos';break;
    case 3 : $sol='tres';break;
    case 4 : $sol='cuatro';break;
    case 5 : $sol='cinco';break;
    case 6 : $sol='seis';break;
    case 7 : $sol='siete';break;
    case 8 : $sol='sota';break;
    case 9 : $sol='caballo';break;
    case 10: $sol='rey';break;
    }
    return $sol;
}

do{
    echo "Introduce vueltas";
    fscanf(STDIN,"%d\n", $num);
}
while ($num<=0||$num>20);

do{
echo "Introduce carta maxima";
fscanf(STDIN,"%d\n", $p);
}
while ($p<1||$p>10);

for ($i = 0; $i < $num; $i++) {
    for ($y = 0; $y < $p; $y++) {
        echo carta($y), ' ';
    }
    
    echo "  ";
}

?>