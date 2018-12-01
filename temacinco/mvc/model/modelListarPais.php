<?php
$db = new PDO("mysql:host=localhost;dbname=test","root","");
$resultado = $db->query("select id,nombre from pais");
$db = null;
?>
