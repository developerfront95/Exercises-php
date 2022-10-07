<?php

/*
$numero = 1;
$palabra = 'Hola mundo';
$flotante = 9.50;
$booleano = true;

echo $numero;

echo $palabra;

echo $flotante;

echo $booleano;
$alumnos = [
    'luis',
    'carlos',
    'jose'
];

echo $alumnos[2];


$materias = [
    "materia"=>'Castellano',
    'materia2'=>'matematicas',
    'materia3'=>'fisica'

];

echo $materias['materia'];


$datos_persona = [
    'edad' => 22,
    'nombre' => 'luis',
    'status' => 'soltero',
    "telefonos" => ["04241763811","2323"]
];

echo $datos_persona['telefonos'][0];


*/




$dato = [];

if (!empty($dato)){
    echo "Esta completo el array";
}
else{
    echo "Esta vacio el array";
}

echo "<br>";

$var = null;

if (isset($var)){
    echo "Existe la variable y no es nula";
}
else{
    echo "No existe la variable ";
}

echo "<br>";


$ponderacion = [1,2,3,4];

foreach ($ponderacion as $puntacion);

    echo $puntacion;


for ($i=$ponderacion[0]; $i <=5 ; $i++) { 

    echo "hola <br>";

};

echo "<br>";

$multiplicando = 2;
$multiplicador;

for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 

        echo 'el numero a multiplicar '.$multiplicando.'x'.$multiplicador ."=". $multiplicando*$multiplicador .'<br>';
}