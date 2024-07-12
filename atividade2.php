<?php

# Tabuada do 7
/*
7 x 1 = 7
----------
7 x 2 = 14
----------
7 x 3 = 21
*/

$numero = 7;

echo "Tabuada do $numero<br>";

for($i=1; $i<=10; $i++){
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}