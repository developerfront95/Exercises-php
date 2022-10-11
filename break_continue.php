<?php

$contador = 1;

while ($contador <= 10){
    if($contador == 5){
        $contador ++;
        continue;
    }

    echo $contador."<br>";
    $contador ++;
}