<?php
/*Hacer una funcion raiz que al meter un sustantivo devuelve en forma singular,ej: perros --> perro*/
/*Hacer una funcion conbinar que al meter una palabra devuelve en forma html un listado de esa palabra,ej: perr --> perro,perros,perra,perras*/
function raiz($sustantivo)
{
    $ultimo_caracter = substr($sustantivo, - 1, 1);
    $raiz = '';
    if ($ultimo_caracter == 's') {
        $raiz = substr($sustantivo, 0, strlen($sustantivo) - 2);
    } else {
        $raiz = substr($sustantivo, 0, strlen($sustantivo) - 1);
    }
    return $raiz;
}

function combinar($raiz)
{
    $html = "<select>\n";
    $desinencias = ['o','a','os','as'];
    foreach ($desinencias as $desinencia) {
        $html .= "<option>{$raiz}{$desinencia}</option>\n";
    }
    $html .= "</select>\n";
    return $html;
}

?>