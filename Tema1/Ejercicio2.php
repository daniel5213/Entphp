<?php
function sigCaracter($c) {
    switch ($c) { //en el switch recoge la variable de c. Luego en cada caso sustituye los signos recogidos por otros distintos
        case "+" :
            $sol = "-";
            break;
        case "-" :
            $sol = ".";
            break;
        case "." :
            $sol = "+";
            break;
    }
    return $sol;
}

echo "Introduce n: \n";
fscanf ( STDIN, "%d\n", $n );

$c = "+";

for($i = $n; $i >= 1; $i --) {// La i es igual a la n que es el numero que introducimos, i menos o igual que 1 se resta 1
    for($j = 1; $j <= $i; $j ++) { //j es 1, jota es menor o igual que i se suma
        echo $c; //saca por pantalla el caracter del c que es una +
        $c = sigCaracter ( $c ); //llama a la fucion sigCaracter  ((Nombre propio de alberto))
    }
    echo "\n";
}
?>