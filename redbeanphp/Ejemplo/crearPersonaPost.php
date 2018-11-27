<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
$estatura = isset($_POST['estatura']) ? $_POST['estatura'] : null;
$peso = isset($_POST['peso']) ? $_POST['peso'] : null;
$idPaisNace = isset($_POST['idPaisNace']) ? $_POST['idPaisNace'] : null;
$idPaisVive = isset($_POST['idPaisVive']) ? $_POST['idPaisVive'] : null;
$idCoches = isset($_POST['idsCoche']) ? $_POST['idsCoche'] : [];
$idAficiones = isset($_POST['idsAficion']) ? $_POST['idsAficion'] : [];

echo $nombre . '//' . $apellido . '//' . $estatura . '//' . $peso . ' registrado';
echo '<a href="menu.php">Volver al menú</a>';

// PERSISTENCIA

require_once ('../lib/rb.php');
R::setup('mysql:host=localhost;dbname=test', 'root', '');

$persona = R::dispense('persona');
$persona->nombre = $nombre;
$persona->apellido = $apellido;
$persona->estatura = $estatura;
$persona->peso = $peso;

if ($idPaisNace != 0) {
    $pais = R::load('pais', $idPaisNace);
    $persona->nace = $pais;
}

if ($idPaisVive != 0) {
    $pais = R::load('pais', $idPaisVive);
    $persona->vive = $pais;
}

foreach ($idCoches as $idCoche) {
    $coche = R::load('coche', $idCoche);
    $persona->ownCocheList[] = $coche;
}

foreach ($idAficiones as $idAficion) {
    $aficion = R::load('aficion', $idAficion);
    $persona->sharedAficionList[] = $aficion;
}

R::store($persona);
?>