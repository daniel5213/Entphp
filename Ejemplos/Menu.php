<?php
function Menu() {
 echo "0.Salir\n";
 echo "\n";
 echo "1.Crear Nombre\n";
 echo "2.Lista Nombre\n";
 echo "\n";
 echo "Introduce opcion: ";
 fscanf(STDIN,"%d\n",$opcion);
 
}

function action0() {
    LimpiarPantalla();
    echo " no hace nada";
}


function action1(&$bd) {
    LimpiarPantalla();
    echo " Introduce un nombre: ";
    fscanf(STDIN,"%d\n",$nombre);
    array_push($nombre);
}
function mostrarbd($nombre) {
    LimpiarPantalla();
    foreach ($bd as $u){
        echo $u."\n";
    }
}
function LimpiarPantalla() {
    for ($i = 0 ; $i <=20;$i++){
        echo "\n";
    }
}
$salir = false;
$bd  = [];
while (!$salir){
    switch (menu()){
        case 0: action0();
        break;
        case 1: add_nombre($bd);
        break;
        case 2: mostrarbd($nombre);
        break;
    }
}
?>