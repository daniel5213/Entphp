<?php 
include '../Ej1/helper.php';
$ajaxOK = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' : false;
if ($ajaxOK) {
    
    $palabra = $_POST['palabra'];
   
    echo raiz($palabra);
    
} else {
    echo '<h1>DÃ³nde vas, calamar</h1>';
}

?>
