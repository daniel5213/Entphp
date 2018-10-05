<?php 

echo <<<html
<head>
    <meta charset="utf.8">
</meta>
<table border="1">
<tr>
<th>#</th>
<th>Caracter</th>
<th>#</th>
</tr>

html;

for ($i=0;$i<=255;$i++){
    echo "<tr><td>$i</td><td>".chr($i)."</td><td>".urlencode(chr($i))."</td></tr>\n";
}
echo <<<html
</table></body>
html;
?>