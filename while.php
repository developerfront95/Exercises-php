<?php

$numero = 1; 

while ($numero <= 20) {
    echo $numero. "<br>";
    $numero ++;
}

echo "<br>";

$numero1 = 20;

while ($numero1 >= 1){
    echo $numero1 . "<br>";
    $numero1 --;
}

echo "<br>";

$multiplicando = 2;
$contador = 1; 

while($contador <= 12){
    echo "$multiplicando x $contador = " .$multiplicando * $contador. "<br>";
    $contador ++;
}

echo "<br>";


//multiplicacion con for 

$contador = 1;
$multiplicando = 5;

for ($i=$contador; $i <=10 ; $i++) { 
    echo "$multiplicando * $i = " . $multiplicando * $i."<br>";

}

echo "<br>";

//multiplicacion con do while 

$c = 1;
$m = 8;

do{
    echo "$m * $c = ". $m*$c. "<br>";
    $c++;


}while($c <=10);
echo "<br>";



// validacion contraseña

$password = 1234567;

for ($m=1; $m <= 3; $m++){
    if($password === 1234567){
        echo "Puede acceder <BR>";
        break;
    }else
        echo "no puede acceder";
        break;
}

