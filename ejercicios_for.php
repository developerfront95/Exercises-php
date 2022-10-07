<html>
<body>
<?php
$contador = 0;
echo "los numeros enteros del 50 al 40 son : ","<p>";
for ($i=50 ;$i>=40; $i--)
{
echo "<strong> $i </strong>";
$contador = $contador + $i;
}
echo " <br> la suma de los numeros es : ", $contador;
?>
</p>
</body>
</html>