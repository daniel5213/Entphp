<?php 
include  '../Ej1/helper.php';
$ca = isset ($_REQUEST['ca'])?$_REQUEST['ca']:null;
$u=$ca;

function table($raiz) {
    global $u;
    $html="<table border='1px'>";
    $html.="<tr><td>original</td><td>raiz</td><td>conbinado</td></tr><br/>";
    $desinencias= ['o','os','a','as'];
    foreach ($desinencias as $desi){
        $html.="<tr><td>".$u."</td><td>$raiz</td><td>{$raiz}{$desi}</td></tr>";
    }
    $html .="</table>";
    return $html;
}

echo table(raiz($u));
?>