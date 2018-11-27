<?php
require_once('lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$resultado = R::findAll('persona');
?>