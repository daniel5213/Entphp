<?php
session_start();
$actual = $_SESSION['_actual'];
$general = $_SESSION['usuarios'];
echo "==============Array Usuarios conectados=================";
echo "<pre>";
print_r($actual);
echo "</pre>";
echo "==============Array Usuarios creados=================";
echo "<pre>";
print_r($general);
echo "</pre>";
echo "=============Listado=================";
foreach ($actual as $k => $q) {
    echo "<h4>Usuario Actual como $q</h4>";
}
echo <<<HTML
<h3>Lista de usuarios/mensajes</h3>
<dl>
HTML;
foreach ($general as $k => $a) {
    if ($k != $q) {
        echo "<dt>$k(".count($_SESSION['usuarios']).")</dt></dl>";
        foreach ($a as $s => $d){
            if($s=='mensaje'){
                foreach ($s as $g=>$r){
                    echo "<dl><dt>".count($g)."</dt></dl>";
                }
            }
        }
        
    }
}

?>

