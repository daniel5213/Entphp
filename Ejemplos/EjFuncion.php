<?php
/* Ejemplo php */
function saludar($nombre) { //Lo de entre parentesis es los parametros que usaremos en la funcion
    echo "Hola $nombre";
}

saludar("Pepe \n");
saludar("Luis \n");
saludar("Dani");
/**
 * Ejemplo java
 *
 * public void saludar(String nombre){
 * system.out.println("Hola" + nombre);
 * }
 *
 * public static void main (String [] args){
 *
 *
 * Persona persona = new Persona();
 * persona.saludar("Pepe");
 *
 * }
 */
echo "\n\n";
echo "Ejemplo prueba de suma";
echo "\n";
$n = 10;

function function_name($n) {
    $d =1;
    echo "\n".$d."\n";
   
    echo $n."\n";
    $suma = $d +  $n;
    echo $suma;
}
function_name($n);
 ?>