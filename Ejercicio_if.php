<?php

/*realizar una condicional la cual va a indicar lo siguiente:
Si la compra pasa de $100 se le aplica un descuento del 20%, pero si la compra
no pasa de 100$, no hay descuneto 
*/
$descuento = 20;
$compra =110 ; 

if ($compra > 100) {
    $valor_descuento = $descuento/100;
    $descuento_total = $compra*$valor_descuento;
    $total = $compra - $descuento_total;

    echo "El total a pagar es : ". $total."<br>";
    echo "El descuento total es: ". $descuento_total;
}else{
    echo "No tiene descuento ";
}

/*
    Realizar una condicional el cual indique si la edad es mayor a 18 años
    es mayor de edad y si no, lo contrario
*/

echo "<br>";

$edad = 19; 

if ($edad > 18) {
    echo "Es mayor de edad ya que tiene: ". $edad;
}else{
    echo "No cumple el requisito, su edad es: ". $edad;
}




echo "<br>";


$total = 110;

if ($total>100){
    $total = $total - ($total*0.20);
    echo $total;
}

