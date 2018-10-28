<?php
$bd=['usuarios'=>['daniel'=>['password'=>'iesrey','correo'=>[]]],
];

$bd['usuarios']['jose']=[ 'password'=>'iesrey','correo'=>[]];

echo count($bd);

echo count($bd);
echo "<pre>";
print_r($bd);
echo "</pre>";


$bd['usuarios']['daniel']['mensaje'][]=[];
$bd['usuarios']['jose']['mensaje'][]=['remitente'=>'jose','fecha'=>'28/10/2020','texto'=>'hola daniel'];

echo "===============";
echo "<pre>";
print_r($bd);
echo "</pre>";

?>