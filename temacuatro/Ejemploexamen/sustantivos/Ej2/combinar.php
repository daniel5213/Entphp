<?php
session_start();
include '../Ej1/helper.php';
$u = $_SESSION['sustantivo'];



echo "<table border='1px'>";
echo "<tr>";

echo "<td>Original</td>";
echo "<td>Raiz</td>";
echo "<td>Combinado</td>";

echo "</tr>";
foreach ( $u as $sustantivo ) {
    echo "<tr>";
    
    echo "<td>" . $sustantivo . "</td>";
    echo "<td>".raiz($sustantivo)."</td>";
    echo "<td>".combinar(raiz($sustantivo))."</td>";
    
    echo "</tr>";
}
echo "<table>";
?>