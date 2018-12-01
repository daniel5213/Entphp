<?php
function pintarEscalera($texto) {
    $html ='';
    for ($i=1;$i<=6;$i++) {
        $html .= "<h$i>$texto</h$i>\n";
    }
    return $html;
}