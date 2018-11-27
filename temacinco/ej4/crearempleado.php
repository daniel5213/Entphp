<?php
$numemp=isset($_POST['empleados'])&& !empty ($_POST['empleados'])?$_POST['empleados']:null;
$nombre=isset($_POST['nombre'])&& !empty ($_POST['nombre'])?$_POST['nombre']:null;
$apellido=isset($_POST['apellido'])&& !empty ($_POST['apellido'])?$_POST['apellido']:null;
$telefono=isset($_POST['telefono'])&& !empty ($_POST['telefono'])?$_POST['telefono']:null;
$sexo=isset($_POST['sexo'])&& !empty ($_POST['sexo'])?$_POST['sexo']:null;