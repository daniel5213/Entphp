<?php 
function generaCadenaAleatoria() {
	$charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	$base = strlen($charset);
	$result = '';
	$now = explode(' ', microtime())[1];
	while ($now >= $base){
		$i = $now % $base;
		$result = $charset[$i] . $result;
		$now /= $base;
	}
	return substr($result, -5);
}

?>