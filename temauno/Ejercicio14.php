<?php

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
echo "Listado de los empleados:\n";
foreach ($bd['empleado'] as $empleado){
    echo "({$empleado['idEmpl']}//{$empleado['Nombre']}//{$empleado['Descripción']}//".nd($empleado['idDepart'],$bd).")\n";
    
}
?>