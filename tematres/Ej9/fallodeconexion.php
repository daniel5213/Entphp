
<h2>Usuario incorrecto</h2>

<?php
$i=0;
set_time_limit(3);
while($i<=3){
    echo "<h3>Regramos al login en $i.s</h3>";
}
header('Location:login.php');
?>