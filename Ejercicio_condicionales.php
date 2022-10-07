<?php 

/*
Una web española de servicios tiene un pequeño problema,
quiere que indiquemos en su página de inicio el día de la semana,
tarea sencilla de no ser por que el servidor nos proporciona el día
en inglés mediante la función date().

 $dia_semana = date('D');

    if ($dia_semana == 'sun') {
        echo "Es Domingo ";
    }elseif($dia_semana == 'mon'){
        echo "Es Lunes ";
    }elseif($dia_semana == 'Thu'){
        echo "Es Jueves ";
    }else{
        echo "Es fin de semana ";
    }

*/

   

/*
Calcular en la compra de computadoras a 650.00, la unidad, si al  comprar 2 y
si paga con tarjeta el descuento es de 18%, al pagar en efectivo el descuento 
es de 25%, mostrar el costo, el descuento y el total a pagar.
*/
/*
$computador = 650.00*2;
echo "El pago total es $computador <br>";

$descuento1= $computador*0.18;
$descuento2 = $computador*0.25;
$metodopago1 = 'tarjeta';
$metodopago2 = 'efectivo';

if ('tarjeta'== $metodopago1){
    $computador = $computador-$descuento1;
    echo "El descuento es $descuento1 <br>";
    echo "El total a pagar es $$computador <br>";
}elseif('efectivo' == $metodopago2){
    $computador = $computador-$descuento2;
    echo "El descuento es $descuento2";
    echo "El total a pagar es $$computador";
}else{
    echo "no aplica el desucuento";
}

*/


$fecha_ingles = date('D','l');

echo $fecha_ingles;