<?php
$sting = "El presidente es muy tonto";
echo "Texto sin remplazar \n$sting\n";

echo "texto remplazado\n";
echo str_replace("tonto", "***", $sting);

?>