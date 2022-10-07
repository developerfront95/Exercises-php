<?php

$var1 = 5;
$var2 = 2;

const PI = 3.14;


//Operacion aritmetica de suma 
function suma ($a,$b){

    $resultado = $a + $b;
    return $resultado;

};

print suma($var1,$var2);

echo "<br>";


//operacion aritmetica de resta

function resta ($a,$b){
    $resultado = $a - $b;
    return $resultado;
};

print resta($var1,$var2);

echo "<br>";


// operacion aritmetica división 

function division ($a,$b){
    $resultado = $a / $b ;
    return $resultado;

};


print division($var1,$var2);

echo "<br>";

// operacion aritmetica multiplicación 

function multiplicacion($a,$b){
    $resultado = $a*$b;
    echo "El resultado de la multiplicación".$a."*".$b."es igual a". $resultado."<br>";
    return $resultado;
};

print multiplicacion($var1,$var2);

echo "<br>";


//Operacion combinada

function combinada ($a,$b,$c,$d){
    $resultado = ($a+$b) / 2 * $c + $d - $a;

    return $resultado;

};


print combinada(9,9,5,8);
