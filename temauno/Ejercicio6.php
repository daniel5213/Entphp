<?php
echo "Bienvenido al ejercicio 6 de javascript";
echo "\nIntroduce un nombre o por fin para salir";

fscanf(STDIN, "%s\n",$nom);
while ($nom!='fin') {
    echo "\n Introduce su edad";
    fscanf(STDIN, "%s\n",$year);
    $infonombre[$nom]=$year;
    echo "\n Introduce un nombre o por fin para salir";
    fscanf(STDIN, "%s\n",$nom);
    
}

foreach ( $infonombre as $nom => $year ) {
    echo "$nom($year),";
}
?>