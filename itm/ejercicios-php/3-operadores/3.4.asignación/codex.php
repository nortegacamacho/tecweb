<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo el operador de asignación y operadores nacidos de él:<br>
El operador de asignación (=) otorga un valor a una variable: '\$variable' = 10. El valor pasa de derecha del operador a su izquierda.<br>
Si disponemos de variables cuyos nombres son ('\$num1'), ('\$num2') y ('\$num3'): <br><br>";

$num1= 10;
$num2= 20;
$num3= 30;

echo "Empleando la asignación (\$num1 = 10), la variable pasa a valer 10. <br>";
echo "Empleando la asignación (\$num2 = 20), la variable pasa a valer 20. <br>";
echo "Empleando la asignación (\$num3 = 30), la variable pasa a valer 30. <br><br>";

echo "Empleando la asignación (\$num1 += 10), la variable pasa a valer 20. El valor de la derecha se SUMA al de la izquierda.<br>";
echo "Empleando la asignación (\$num3 -= 10), la variable pasa a valer 20. El valor de la derecha se RESTA al de la izquierda.<br>";
echo "Empleando la asignación (\$num1 *= 10), la variable pasa a valer 100. El valor de la derecha MULTIPLICA al de la izquierda.<br>";
echo "Empleando la asignación (\$num2 /= 10), la variable pasa a valer 2. La variable de la izquierda se DIVIDE entre el valor de la derecha.<br>";
echo "Empleando la asignación (\$num2 .= 10), la variable pasa a concatenarse como si fueran strings. Sale 2010.<br><br>";

?>