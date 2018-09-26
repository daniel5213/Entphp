<?php

$bd = [];
$bd['departamentos'] = [
    10 => [
        'nombre' => 'ventas',
        'descripcion' => 'donde se cuece el bacalao'
    ],
    20 => [
        'nombre' => 'compras',
        'descripcion' => 'ruina'
    ]
];

$bd['empleados'] = [
    1 => [
        'nombre' => 'alberto',
        'apellido' => 'garay',
        'idDpt' => 20
    ],
    
    2 => [
        'nombre' => 'pepita',
        'apellido' => 'garcia',
        'idDpt' => 10
    ]
];

echo "LISTADO de EMPLEADOS\n";
foreach ($bd['empleados'] as $idEmpleado => $empleado ) {
    echo "( $idEmpleado // {$empleado['nombre']} // {$empleado['apellido']} //  {$bd['departamentos'] [$empleado['idDpt']] ['nombre'] } )";
    echo "\n";
}

?>