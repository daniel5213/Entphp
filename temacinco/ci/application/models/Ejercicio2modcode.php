<?php
class Ejercicio2modcode extends CI_Model{
    function leer(){
        $nombre=$_GET['nombre'];
        return $nombre;
    }
}