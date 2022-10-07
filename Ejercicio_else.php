<?php 

$dia = date('N');

if( $dia == 1){
    echo "Es lunes";
}elseif ($dia == 2) {
    echo "Es martes";
}elseif ($dia == 3) {
    echo "Es miercoles";
}elseif ($dia == 4) {
    echo "Es jueves";
}elseif ($dia == 5){
    echo "Es viernes";
}else{
    echo "Es fin de semana";
}

echo "<Br>";


/*
En una fábrica de computadoras se planea ofrecer a los clientes un
descuento que dependerá del número de computadoras que compre. si las 
computadoras son menos de cinco se les dará un 10% de descuento sobre el total 
de la compra; si el numero de computadoras es mayor o iguala cinco pero menos 
de diez se le otorga un 20$ de descuento; y si son 10 o mas se les da un 40% de decuento
el precio de cada computadora es de $700

*/

$precio_computadora = 700;
$total_compra = 11;
$total_pagar = $precio_computadora * $total_compra;

 if ($total_compra < 5){
    $total_pagar = $total_pagar - ($total_pagar * 0.10);
    echo "El total a pagar es $total_pagar";
 }elseif($total_compra >= 5 && $total_compra < 10){
    $total_pagar = $total_pagar - ($total_pagar * 0.20);
    echo "El total a pagar es $total_pagar";
 }elseif ($total_compra >10){
    $total_pagar = $total_pagar - ($total_pagar * 0.40);
    echo "El total a pagar es $total_pagar";
 }else{
    echo "No tiene descuento ";
 }


