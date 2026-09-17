<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo una serie de variables numerales con las que operar de forma aritmética:<br>
Si disponemos de tres (3) variables cuyo nombre son ('\$num1'), ('\$num2') y ('\$num3') con un valor asociado (10), (20) y (30), se pueden hacer muchas cosas: <br><br>";

$num1= 10;
$num2= 20;
$num3= 30;
$suma= $num1 + $num2;
$suma1= $num1 + $num3;
$resta = $num1 - $num2;
$resta1 = $num3 - $num1;
$multiplicación= $num1 * $num2;
$división= $num2 / $num1;


echo "La suma de " . $num1 . " y " . $num2 . " es igual a " . $suma . "<br>";
echo "La suma de " . $num1 . " y " . $num3 . " es igual a " . $suma1 . "<br><br>";
echo "La resta de " . $num1 . " y " . $num2 . " es igual a " . $resta . "<br>";
echo "La resta de " . $num3 . " y " . $num1 . " es igual a " . $resta1 . "<br><br>";
echo "La multiplicación de " . $num1 . " por " . $num2 . " es igual a " . $multiplicación . "<br>";
echo "La división de " . $num2 . " entre " . $num1 . " es igual a " . $división . "<br>";

?>
