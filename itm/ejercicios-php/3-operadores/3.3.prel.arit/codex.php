<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo una serie de variables numerales con las que operar de forma aritmética:<br>
Si disponemos de más de 2 operadores aritméticos del mismo nivel, se necesita la prelación (   ) para determinar el orden de las operaciones<br>
Si disponemos de variables cuyos nombres son ('\$num1'), ('\$num2') y ('\$num3'): <br><br>";

$num1= 10;
$num2= 20;
$num3= 30;

$prela= ($num1 * $num2) - $num3;
$prela1= ($num3 - $num2) - $num1;
$prela2= $num2 * ($num1 + $num3);

echo "Empleando la prelación en  (" . $num1 . " por " . $num2 . ") menos ". $num3. ", habiendo un paréntesis entre los 2 primeros nos da " . $prela . "<br>";
echo "Empleando la prelación en  (" . $num3 . " menos " . $num2 . ") menos ". $num1. ", habiendo un paréntesis entre los 2 primeros nos da " . $prela1 . "<br>";
echo "Empleando la prelación en  " . $num2 . " por (" . $num1 . " más ". $num3. "), habiendo un paréntesis entre los 2 últimos nos da " . $prela2 . "<br>";

?>