<?php 
$ajaxOK = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' : false;



$a=array("titanic","crespuculo","los juegos del hambre",);
$random_keys=array_rand($a,1);
echo $a[$random_keys];

?>