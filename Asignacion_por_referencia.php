<?php


$texto = 'carlos luis';

$text1 = $texto;
$text2 = &$texto;

echo $text2;

$texto = 'julian castro';

echo $text2;