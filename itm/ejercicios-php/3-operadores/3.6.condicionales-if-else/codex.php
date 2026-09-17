<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo una serie de variables que comparar mediante if/else:<br>
Si disponemos de dos (2) variables cuyo nombre son ('\$valor1') y ('\$valor2') con un valor asociado (10) y (5), se pueden comparar: <br><br>";
$valor1=10;
$valor2=5;
echo "Como el primer valor es mayor que el segundo ('\$valor1' > '\$valor2'), es decir (10 > 5), el programa nos indica:<br>";

if ($valor1 > $valor2) {
    echo $valor1 . " es mayor que " . $valor2. "<br>";
}

echo "Como el segundo valor es menor que el segundo ('\$valor2' < '\$valor1'), es decir (5 < 10), el programa nos indica:<br>";

if ($valor2 > $valor1) {
    echo "$valor2" . " es mayor que " . "$valor1";
}else
echo "$valor2". " es menor que " . "$valor1";

?>