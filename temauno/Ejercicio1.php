<?php
echo "Introduce un numero";
fscanf(STDIN, "%d\n",$num);

/**
 * Programa que */
$max=$num;
$min=$num;

while($num!=0){
    if($num < $min){
        $min=$num;
    }
    if ($num >$max){
        $max=$num;
    }
    echo "Introduce un numero";
    fscanf(STDIN, "%d\n",$num);
    
}

if ($max == 0){
    echo "Introduce un numero al menos";
}else {
    echo "(max/min) $max/$min";
}
?>
