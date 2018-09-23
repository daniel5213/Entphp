<?php

echo "Introduce las columnas";
fscanf(STDIN,"%d\n", $num);

echo "Introduce el rango";
fscanf(STDIN,"%d\n", $p);

for ($i = 0; $i < $num; $i++) {
    for ($y = 0; $y < $p; $y++) {
        echo $y, ' ';
    }
    echo " // ";
}

?>