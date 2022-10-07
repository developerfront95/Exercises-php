<?php

/*
Calcular el total que una persona debe pagar en una llantera, el precio de compra de cada llanta es de
$800 si se compran menos de 5 llantas y de $700 si se  compran 5 o mas 
*/

$llanta = 800;
$compra = 4;

if($compra < 5){
    echo "El precio de la llanta es $800";
}else{
    echo " El precio de la llanta es 700$";
}


/*
Determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobara
si su promedio de tres calificiones es mayor o igual a 7.0; reprueba en caso contrairo
*/

echo "<br>";


$prom = (3.5+7+10)/3;

if($prom >=7.0){
    Echo "Aprobo el curso";
}else {
    echo "Reprobo el curso";
}


echo "<br>";

/* Ejercicio operardor ternario 

Hacer un programa que calcule el total a pagar por compra de camisas. Si se 
compran tres camisas o mas se aplica un descuento del 20% sobre el total de la compra y si son menos
de tres camisas un descuento del 10%
*/


$total_camisas = 2;
$descuento1 = 0.20;
$descuento2 = 0.10;
$total_pagar = 100;

$pago = ($total_camisas >= 3) ? $total_pagar = $total_pagar-$descuento1 : $total_pagar = $total_pagar-$descuento2;  

echo "El total a pagar es: $pago" ;


