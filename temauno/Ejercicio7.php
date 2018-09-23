<?php
echo"Introduce la linea de texto: ";
fscanf(STDIN, "%s\n",$linea);
echo"Introduce las vueltas: ";
fscanf(STDIN, "%s\n",$vueltas);
$i=1;
for ($i;$i<$vueltas;$i++){
    echo "<h$i>$linea</h$i>\n";
    $i=$i;
    
}

/*Como la $i tiene las vueltas obtenidas por el anterior bucle, no es necesario convertirlo */

for ($i;$i>=1;$i--){
    echo "<h$i>$linea</h$i>\n";
    
}
?>