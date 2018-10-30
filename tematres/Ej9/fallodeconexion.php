<?php
set_time_limit(25);
while ($i <= 10) {

    sleep(2);
    $i ++;
    if ($i = 100) {
        header('Location:login.php?regresion');
    }
}
?>