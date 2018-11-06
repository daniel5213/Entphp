<?php
session_start();

if (! isset($_POST['sustantivo'])) {
    $_SESSION['sustantivo'] = [];
} else {
    if ($_POST['sustantivo'] != '')
        $_SESSION['sustantivo'][] = $_POST['sustantivo'];
        echo "<pre>";
        print_r($_SESSION['sustantivo']);
        echo "<pre>";
}

if (isset($_POST['enviar']) && $_POST['enviar'] == "combinar") {
    header("location:combinar.php");
}
echo <<<OUT

<form action="index.php" method="post">
Introduce un sustantivo regular<input type="text" id="sustantivo" name="sustantivo"/><br/>
<input type="submit" value="mas"/><input type="submit" name="enviar" value="combinar"/><br/>
<div id="midiv"/>
</form>

OUT;

?>