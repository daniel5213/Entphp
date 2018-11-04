<?php 
include_once 'conbinar.php';
include_once 'raiz.php';

session_start();

$sustantivos = $_POST['sustantivos'];
$conbinar = $_POST['conbinar'];
$mas = $_POST['mas'];

if($mas != null){
    $_SESSION['sustantivos'][] = $sustantivos;
}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Sustantivos</title>
	</head>
	<body>
		<h3>Introduce mas sustantivos regulares</h3>
		<form action="index.php" method="POST">
			<input type="text" name="sustantivos">
			<br>
			<input type="submit" name="mas" value="mas sustantivos">
			<input type="submit" name="conbinar" value="conbinar">
		</form>
		
		<?php 
		if($conbinar != null){
		  echo '<table border="1">';
		  echo '<tr>';
		  echo '<th>orginal</th>';
		  echo '<th>raiz</th>';
		  echo '<th>conbinacion</th>';
		  echo '</tr>';		
			 for($i=0; $i<count($_SESSION['sustantivos']);$i++){
			     echo '<tr>';
			     echo '<td>'. $_SESSION['sustantivos'][$i] .'</td>';
			     echo '<td>'.raiz($_SESSION['sustantivos'][$i]).'</td>';
			     echo '<td>'. conbinar(raiz($_SESSION['sustantivos'][$i])) .'</td>';
			     echo '</tr>';
			 } 
		  echo '</table>';
          }
          echo '<a href="index.php">volver a introducir sustantivos</a>'
		  ?>
	</body>
</html>
