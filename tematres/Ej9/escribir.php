<?php 
session_start();
print_r($_SESSION['_activo']);
$usuarioactivo=$_SESSION['_activo'];

?>

<form>
<label id="De">De:</label>
<input type="text" name="de" value="<?= $usuarioactivo?>"/><br/>
<label id="Para">De: </label>
<input type="text" name="para" value="pepe"/><br/>
<textarea rows="120px" cols="90px">Escribe el contenido del mensaje</textarea>
</form>