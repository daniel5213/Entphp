<?php
require_once '../conexion.php';
function insertar() {
    $db=conectarMySql();
    $sql =<<<sql
insert into productos(nombre,precio) values(?,?)
sql;
    $resultado=$db->prepare($sql);
    $resultado->execute(['Nocilla',1]);

    
}

insertar();