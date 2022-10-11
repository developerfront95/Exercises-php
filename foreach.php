<?php 


$listado_alumnos = ['luis','juan','carlos','antonio','sofia','victoria'];


$listado_maestros =[
        'castellano' => 'Julio Cesar',
        'Matematicas' => ' Cesar',
        'Ingles' => 'Sofia',
        'Fisica' => 'carlos',
];  

foreach($listado_alumnos as $valors){
    echo $valors . "<br>";
};

echo "<BR>";

foreach($listado_maestros as $asignatura => $maestro){

    echo "El maestro de la asignatura $asignatura es $maestro <br>";

};

echo "<BR>";


// agregar valor a un array y mostrarlo

function add_array($a,$b,$c,$d){

    $estudiantes = [];

    array_push($estudiantes,$a,$b,$c,$d);

    foreach($estudiantes as $alumnos){
        echo "Los alumnos Agregados en el array son: $alumnos <br>";
    }

};

add_array('carlos','juan','sofia','gabriel');

echo "<BR>";


// Crear una funcion la cual agregue un array con su respectiva clave y valor

function vehicle_sale ($aa,$ab,$ac,$ad){
    
    $vehicle = [];
    array_push($vehicle,$aa,$ab,$ac,$ad);

    foreach($vehicle as $vehiculo => $cantidad){

        echo "Los vehiculos son los siguientes: $vehiculo y la cantidad de venta dde este vehiculo es $cantidad <br>";
    }

};

vehicle_sale('toyota','chevrolet','honda','wolsvangen');

echo "<BR>";

//recorriendo un array dentro de otro array 

$productos = [
    ['ceramica' => '2 x 1', 'lozas' => '3 x 1'],
    ['ceramica' => '2 x 2', 'lozas' => '3 x 2'],
    ['ceramica' => '2 x 3', 'lozas' => '3 x 3'],
    ['ceramica' => '2 x 4', 'lozas' => '3 x 4']
];

foreach ($productos as $prod){
    echo "Las ceramicas tienen una promoción de precio de $prod[ceramica] y la promocion de las lozas es $prod[lozas] <br>";
};

