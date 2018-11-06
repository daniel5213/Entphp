<?php

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
    $desinencias = [
        'o',
        'os',
        'a',
        'as'
    ];

    $random_keys = array_rand($desinencias, 1);

    $html = "{$raiz}{$desinencias[$random_keys]}";

    return $html;
}

?>