<?php
echo "Introduce n: ";
fscanf ( STDIN, "%d\n", $num );

$i = 0;

while ( $num != 0 ) {
    
    $infousuario [i]=$num;
    $i++;
    echo "Introduce n: ";
    fscanf ( STDIN, "%d\n", $num );
    
}

echo "Que operacion quieres hacer: suma o multiplicar?: ";
fscanf ( STDIN, "%s\n", $op );

switch ($op) {
    case "suma" :
        mostrarSuma ( $stack );
        break;
    case "multiplicar" :
        mostrarMult ( $infousuario );
        break;
    default :
        echo "Operaci�n no v�lida";
}

function mostrarSuma($array) {
    $acc = 0;
    foreach ($array as $v) {
        $acc += $v;
    }
    echo "La suma vale $acc";
}

function mostrarMult($array) {
    $acc = 1;
    foreach ($a as $v) {
        $acc *= $v;
    }
    echo "El producto vale $acc";
}
?>