<?php

function Menu($o) {
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
            AñadirBD();
            break;
    }
    
}

function AñadirBD($param) {
    
}

$bd=[];
$bd['departamento'][]=['idDepart'=>10,'Nombre'=>"Ventas",'Descripción'=>"Planta 1 izq"];
$bd['departamento'][]=['idDepart'=>20,'Nombre'=>"Compras",'Descripción'=>"Planta 1 der"];
$bd['empleado'][]=['idEmpl'=>1,'Nombre'=>"Daniel",'Descripción'=>"Es un makina",'idDepart'=>10];
$bd['empleado'][]=['idEmpl'=>2,'Nombre'=>"Jorge",'Descripción'=>"Es un makina tmb",'idDepart'=>20];

function nd($id,$bd){
    
    foreach ($bd['departamento'] as $depart){
        if($id == $depart['idDepart']){
            $sol=$depart['Nombre'];
        }
    }
    return $sol;

}






//-----------------------Main--------------------------\\

$opcion = 0;

echo "Bienvenido al menu de los empleados";
echo "\nElige la opcion que se desé";
fscanf(SRDIN, "%d\n", $opcion);



Menu($opcion);
echo "Listado de los empleados:\n";
foreach ($bd['empleado'] as $empleado){
    echo "({$empleado['idEmpl']}//{$empleado['Nombre']}//{$empleado['Descripción']}//".nd($empleado['idDepart'],$bd).")\n";
    
}
?>