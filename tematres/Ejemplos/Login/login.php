<?php 
if (isset($_GET['status']) && $_GET['status']=='error'){
    echo '<h3> usuario/contraseña Incorrecta</h3>';
}

?>

<form action="loginPost.php" method="post">
Nombre---><input type="text" id="usuario" name="usuario"/><br>
Contraseña ---><input type="password" id="pwd" name="pwd"/><br>
<input type="submit" value="Iniciar Session"/>

</form>