<?php
$dia=0;$mes=0;$ano=0;
echo "Introduce dia: ";
fscanf(STDIN,"%d\n",$dia);

echo "Introduce mes: ";
fscanf(STDIN,"%d\n",$mes);

echo "Introduce año: ";
fscanf(STDIN,"%d\n",$ano);

//time() es una funcion que saca los segundos de la fecha actual y el strtotime saca los segundos del formato introducido
//entonces resta es los segudo de la fecha actual con los segundos de la fecha introducida, que dá los segundos entre medias
$resultime =Time() - strtotime("$dia-$mes-$ano");
//Resultado de la resta:  787410206
echo "tiempo: $resultime \n";


const minu = 60;			// 60
const hor = 3600; 		// 60 x 60
const di = 86400; 		// 3600 x 24
const ms = 2592000;	// 86400 x 30
const anio = 31536000;	// 86400 x 365

$Anos = (int)($resultime / anio); //787410206  /60 --->  24,96861383815322 pero al convertir a int se queda como 24
//echo $Anos."\n";
$result = $resultime % anio;
//30547303s en años
$mesTrans = (int)($result / ms); //30547303 s / 2595000
$result = $result % ms;

$resultdia = (int)($result / di);
$result = $result % di;

$resulthora = (int)($result / hor);
$result = $result % hor;

$resultminuto = (int)($result /minu);
$result = $result %minu ;

echo "Han transcurrido desde el $dia/$mes/$ano.
$Anos años, $mesTrans meses , $resultdia dias, $resulthora h, $resultminuto m y $result s";

?>