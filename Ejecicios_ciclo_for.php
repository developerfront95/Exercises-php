<?php

$distrito_capital = ['caracas','carabobo','aragua','zulia','cojedes','barinas','apure','amazonas','falcon','margarita'];


foreach($distrito_capital as $valor){
    $valor = $valor++;
    echo $valor."<br>";
}

echo "<br>";

$edades = [15,16,17,18,19,20];

foreach($edades as $edad){
    $edad = $edad++;
    echo $edad."<br>";
}

echo "<br>";

for ($i=15; $i <=20; $i++) { 
    $i = $i++;

    echo $i."<br>";
}

echo "<br>";

for ($i=1; $i <=10 ; $i++) { 
    $multiplicador = 5;
    $resultado = $multiplicador*$i;

    echo "La multiplicación de ".$multiplicador."*".$i." es igual a = ".$resultado."<br>";
    

}

echo "<br>";

