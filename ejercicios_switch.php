<?php

$dia = 1;

switch ($dia) {
    case 1:
        echo "Es lunes";
        break;
    case 2:
        echo "Es martes";
        break;
    case 3:
        echo "Es miercoles";
        break;
    case 4:
        echo "Es jueves";
        break;
    case 5:
        echo "Es viernes";
        break;
    case 6:
        echo "Es sabado";
        break;
    case 7:
        echo "Es domingo";
    default:
        echo "Ingrese un dia de la semana valido ";
        break;
}

echo '<br>';

/*
Considera estás desarrollando una web donde trabajas con tipos de motor
(suponemos que se trata del tipo de motor de una bomba para mover fluidos).
Define una variable $tipoMotor y asígnale valor 3. Los valores posibles son 1, 2, 3, 4.
A través de un condicional switch haz lo siguiente:

a)      Si el tipo de motor es 0, mostrar un mensaje indicando “No hay establecido un valor definido para el tipo de bomba”.

b)      Si el tipo de motor es 1, mostrar un mensaje indicando “La bomba es una bomba de agua”.

c)       Si el tipo de motor es 2, mostrar un mensaje indicando “La bomba es una bomba de gasolina”.

d)      Si el tipo de motor es 3, mostrar un mensaje indicando “La bomba es una bomba de hormigón”.

e)      Si el tipo de motor es 4,mostrar un mensaje indicando “La bomba es una bomba de pasta alimenticia”.

f)       Si no se cumple ninguno de los valores anteriores mostrar el mensaje “No existe un valor válido para tipo de bomba”.
*/


$tipoMotor = 3 ;

switch ($tipoMotor) {
    case 0:
        echo "No hay establecido un valor definido para el tipo de bomba";
        break;
    case 1:
        echo "La bomba es una bomba de agua";
        break;
    case 2:
        echo "La bomba es una bomba de gasolina";
        break;
    case 3:
        echo "La bomba es una bomba de hormigón";
        break;
    case 4:
        echo "La bomba es una bomba de pasta alimenticia";
        break;
    default:
        echo "No existe un valor válido para tipo de bomba";
        break;
}

echo '<br>';


/*
Nuestro jefe de proyectos nos ha pedido que desarrollemos un pequeño script para redireccionar
las páginas según su url. Para esto nos especifica que tendremos disponible una variable llamada 
$controlador con el nombre de la página. También nos dice que los posibles valores de esta variable pueden ser:

contacto
inicio
blog
empleados
quienes-somos
sitemap

Para la primera versión de este redireccionador tan solo nos piden que mostremos un mensaje avisando del controlador seleccionado.
Este primer mensaje lo puedes hacer con la función echo.
*/

$controlador = 'quienes-somos'; 

switch ($controlador){
    case 'contacto':
        echo "Elegio el controlador contacto";
        break;
    case 'inicio':
        echo "Eligio el controlador inicio";
        break;
    case 'blog':
        echo "Eligio el controlador blog";
        break;
    case 'empleados':
        echo "Eligio el controlador empleados";
        break;
    case 'quienes-somos';
        echo "Eligio el controlador quierenes-somos";
        break;
    case 'sitemap':
        echo "eligio el controlador sitemap";
        break;
    default : 
        echo "No se elegio ningun controlador";
        break;
}