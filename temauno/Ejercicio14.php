<?php
include 'Ejercicio14bd.php';
print_r($bd['empleado']);
/* function Menu($o) {
    $bd= [];
    echo "Opciones Empleados\n";
    echo "1.- Nuevo Empleados\n";
    echo "2.- Modificar Empleados\n";
    echo "3.- Borrar Empleados\n";
    echo "4. Consultar Empleados\n";
    echo "\n";
    echo "Opciones Departamentos\n";
    echo "5. Nuevo Departamentos\n";
    echo "6. Modificar Departamentos\n";
    echo "7. Borrar Departamentos\n";
    echo "8. Consultar Despartamentos\n";
    
    
    switch ($o){
        case 1:
            AñadirBD($bd);
            break;
    }
    
}

function AñadirBD($bd) {
    foreach ($bd['empleado'] as $empleado){
       array_push(empleado,empleado['idEmpl']);
        
    }
} */


function nd($id,$bd){
    
    foreach ($bd['departamento'] as $depart){
        if($id == $depart['idDepart']){
            $sol=$depart['Nombre'];
        }
    }
    return $sol;
    
}






//-----------------------Main--------------------------\\

// $opcion = 0;

// echo "Bienvenido al menu de los empleados";
// echo "\nElige la opcion que se desé";
// fscanf(SRDIN, "%d\n", $opcion);



//Menu($opcion);
echo "Listado de los empleados:\n";

?>