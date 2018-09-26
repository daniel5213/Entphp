<?php
$sting = "El presidente es muy tonto y es un analfabeto por no saber hablar";
$lista = $sting;
echo "Texto sin remplazar \n$sting\n";
$prohibida =["tonto","analfabeto"];
echo "texto remplazado\n";
foreach ($prohibida as $prohibida){
$sting= str_replace($prohibida, "******", $sting);
}
echo $sting; 
?>