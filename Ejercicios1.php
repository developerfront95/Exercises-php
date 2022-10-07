<?php
/*

En una web que simula una calculadora, un usuario puede introducir dos números 
y la web le dirá cual de los es mayor. El planteamiento es el siguiente:

*El primer número estará en una variable llamada $a.
*El segundo número viene almancenado en la variable $b.
*Ayundandonos de la estructura de control IF y ELSE, debemos mostrar por 
pantalla el número mayor de los dos, con un mensaje que diga: El mayor de los números es X.
*/

$a = 10;
$b = 20;

if ($a > $b){
    echo " $a Es mayor que $b";
}else{
    echo "$b Es mayor que $a" ;
}

echo "<br>";


/*
Debemos diseñar y programar un algoritmo que, para la introducción de un peso de un vehículo,
diga si está permitido o no dependiendo de un segundo valor $pesoPermitido. El planteamiento por partes es:

*La variable $pesoVehiculo tiene el peso del vehiculo a comprobar.
*La variable $pesoPermitido contiene el peso máximo permitido para el vehículo en cuestión.
Si el peso del vehículo está por debajo del peso máximo permitido deberemos mostrar un mensaje indicándolo.
En caso contrario también habrá que notificar: El peso máximo del vehículo es: X (Siendo X el peso máximo permitido)
*/


$pesoVehiculo = 105; //peso a comprobar
$pesoPermitido = 20; // peso permitido 

if($pesoVehiculo < $pesoPermitido){
    echo " El peso es permitido ";
}else{
    echo "El peso maximo del vehiculo es: $pesoPermitido";
}

echo "<br>";


/*
Se pide programar un algoritmo, que dado un texto introducido por el usuario, muestre por pantalla un mensaje.
El texto introducido por el usuario será Hola o Adiós.

El mensaje introducido estará almacenado en $mensaje.
Si el usuario ha introducido Hola, deberemos mostrar por pantalla un mensaje que diga: Muy buenas, usuario
Si por el contrario el mensaje es Adiós,  mostraremos un mensaje que diga: Hasta pronto.

*/

$mensaje = 'Adis';

if($mensaje === 'Hola'){
    echo "Muy buenas, usuario";
}elseif($mensaje === 'Adios'){
    echo "Hasta pronto.";
}else{
    echo "No se comprende lo escrito";
}

echo "<br>";

/*

Vamos a programar un pequeño script que valide el texto de enlaces. 
Si nos pasan un texto que diga "aquí" mostraremos un mensaje: ¡Cuidado, estás fastidiando un enlace a una página!.
En el caso contrario imprimiremos: ¡Bien! Estás haciendo un favor al mundo del SEO.

El texto introducido estará almacenado en una variable $enlace.
Los mensajes debes mostrarlos dentro de cada caso posible, es decir, entre las llaves del IF o del ELSE.

*/

$enlace = "aquí";

if ($enlace === "aquí"){
    $mensaje = "¡Cuidado, estás fastidiando un enlace a una página!";
    echo $mensaje;
}else{
    $mensaje = "¡Bien! Estás haciendo un favor al mundo del SEO.";
    echo $mensaje;
}


echo "<br>";

/*

Un cliente de un blog tiene un problema: sus lectores pueden dejar comentarios en la web, 
pero estos deben de ser de menos de 150 caracteres y, a menudo, cuando escriben, suelen pasarse de longitud. 
Debes programar un pequeño script ayudándote de la función strlen() que muestre por pantalla un mensaje de error si se pasa de largo:

La variable $comentario contiene el texto del mensaje.
La función strlen() nos devuelve la longitud de un texto: $caracteres = strlen($comentario);
Si el usuario introduce un texto de longitud permitida habrá que indicarlo y en caso contrario mostrar un error como:
La longitud máxima de los comentarios es de 150, tu comentario en cambio tiene XX caracteres

*/

$comentario = 'Un cliente de un blog tiene un problema: sus lectores pueden dejar comentarios en la web, 
pero estos deben de ser de menos de 150 caracteres';

$caracteres = strlen($comentario);

if($caracteres < 150){
    echo "La longitud del texto, esta permitida";
}else{
    echo "La longitud máxima de los comentarios es de 150, tu comentario en cambio tiene $caracteres caracteres";
}

echo "<br>";

/*

En este ejercicio vamos a resolver un problema surgido en una web de contenido especial, limitado a adultos no jubilados.
 Al usuario se le muestra por pantalla un mensaje y un campo para que introduzca su edad. Nosotros, en php,
  debemos de programar un algoritmo que resuelva el problema:

Si la edad introducida es de un menor de edad, deberemos indicar que tiene el acceso prohibido
Si la edad edad está por encima de los 65 le avisaremos diciéndole que el contenido, por desgracia, no es para jubilados.
Por último si la edad está comprendida entre 18 y 65 le daremos la bienvenida a la web con un mensaje: bienvenido
a la web www.srcodigofuente.es/adultos-no-jubilados.
Ayuda del ejercicio:

La edad del usuario viene dada en la variable $edadUsuario.
Deberás utilizar varias condiciones en un mismo IF para poder resolverlo, deberás de ayudarte de AND y OR.
Los mensajes puede ser personalizados por tí, lo importante es que los imprimas por pantalla.

*/

$edadUsuario = 40;

if ($edadUsuario <18){
    echo "tiene el acceso prohibido";
}elseif($edadUsuario > 65){
    echo "El contenido, por desgracia, no es para jubilados.";
}elseif($edadUsuario >18 && $edadUsuario <65){
    echo "bienvenido
    a la web www.srcodigofuente.es/adultos-no-jubilados.";
}else{
    echo "No aplica, ingrese su verdadera edad";
}

echo "<br>";

/*
En una aplicación web para una agencia de vuelos requieren de nuestra ayuda,
necesitan un pequeño script que impida que un piloto tenga más horas de vuelo que las recomendadas. 
Deberemos mostrar un mensaje de error en caso de que se hayan sobrepasado las horas o, en caso contrario, 
incrementar el número de horas dado en la variable con las horas de vuelo del piloto. Los datos iniciales para el ejercicio son:

Recibimos las horas de vuelo totales del piloto en $horasTotales.
Las horas de vuelo a añadir las podremos saber con $horasVuelo.
Las horas máximas de vuelo permitidas a un mismo piloto vendrán en la variable $maxHoras.
*/

$horasVuelo = 0;
$horasTotales = 50;
$maxHoras = 100;

if ($horasTotales > $maxHoras){
    echo "Se ha sobrepaso el maximo de horas";
}elseif ($horasTotales < $maxHoras){

    for ($i=$horasVuelo; $i <$maxHoras ; $i+=20) { 
        $horasVuelo = $horasVuelo +=20  ;
        echo $horasVuelo . "<br>";
    }
    
    echo "Ha cumplido con el numero total de horas";
  
}


echo '<br>';

$genero = 'f';
$edad = 60;

if ($genero == 'm' && $edad >= 60){
    echo "Ya puede jubilarse";
}elseif($genero == 'f' && $edad >= 54){
    echo "Puede jubilarse";
}else{
    echo "No pude jubilarse";
}