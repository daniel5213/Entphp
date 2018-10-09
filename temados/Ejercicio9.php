<?php
function resaltar($res) {
   return "<h1>$res</h1>";
}

$r= "Hola mi nombre es hola y el tuyo?";
$nom="daniel";
$frase =str_replace("hola", resaltar($nom),$r);
echo $frase;
