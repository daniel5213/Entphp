<?php
function conectarMySql($schema = 'test', $usu = 'root', $pwd = '', $host = 'localhost')
{
    try {
        $dsn = "mysql:host=$host;dbname=$schema";
        $db = new PDO($dsn, $usu, $pwd);
        return $db;
    } catch (PDOException $e) {
        print('ERROR DE CONEXION');
        echo $e->getMessage();
        die();
    }
}