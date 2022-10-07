<?php 

//ejercicio con match 

$x = 20;

$resultado = match($x){
    $a = 10 => "El numero evaluado es 10",
    $b = 15 => "El numero evaluado es 15",
    $c = 20 => "El numero evaluado es 20 ",
    default => "Ninguno de estos numero es valido"

};

echo $resultado;

echo "<br>";

//ejercicio 2 con match

$status = 'indefinido';

$resultado_evaluacion = match($status){
        
    'aprobado'=> 'Esta aprobado en el semestre',
    'rechazado' => 'Esta rechazado en el semestre',
    'indefinido' => 'No se ha definido su estado',
    default => 'No tiene un status' 


};

echo $resultado_evaluacion;

echo "<br>";

//Ejercicio 3 evaluacion de notas

$nota = 13;

$nota_final = match(true){
    $nota >= 18 && $nota < 20 => 'Aprobaste la materia',
    $nota < 18 && $nota > 15 => 'Puede recuperar la materia',
    $nota < 15 && $nota > 10 => 'perdio la materia',
    default => 'No curso la materia'
};

echo $nota_final;

