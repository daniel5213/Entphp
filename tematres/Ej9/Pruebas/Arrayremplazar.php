<?php
$bd=['usuarios'=>['daniel'=>['password'=>'iesrey','correo'=>[]]],
];

$bd['usuarios']['jose']=[ 'password'=>'iesrey','correo'=>[]];

echo count($bd);

echo count($bd);
echo "<pre>";
print_r($bd);
echo "</pre>";


$bd['usuarios']['daniel']['correo'][]='daniel.alvarez.santaigo@gmail.com';
$bd['usuarios']['jose']['correo'][]='nosecomoes@gmail,com';
echo "===============";
echo "<pre>";
print_r($bd);
echo "</pre>";

?>