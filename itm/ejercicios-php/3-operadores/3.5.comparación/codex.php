<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo el operador de comparación para un valor o cadenas:<br><br>";

echo "Para los valores:<br><br>";
echo "Igualdad (==): Dos elementos tienen el mismo valor, como (2==2). <br>";
echo "Diferencia (!=) o (<>): Dos elementos tienen un valor diferente, como (3!=2). <br>";
echo "Mayor/mayor o igual que (>) y (>=)<br>";
echo "Menor/menor o igual que (<) y (<=)<br>";
echo "Idéntico (===): Dos elementos comparten el mismo valor y son el mismo tipo de dato:<br>
(\$num1) = 10;<br>
(\$num2) = \"10\";<br>
var_dump(\$num1 === \$num2);<br><br>";

echo "Para las cadenas:<br><br>";


echo "Operador (&&): Significa Y. Tiene una mayor prioridad. Ambos valores deben ser verdaderos para ser V.<br>";
echo "Operador (AND): Significa Y. Tiene menor prioridad. Opera como (&&). <br>";
echo "Operador (||): Significa O. Tiene una mayor prioridad. Solo un valor debe ser verdadero para ser V.<br>";
echo "Operador (OR): Significa O. Tiene menor prioridad. Opera como (||). <br>";
echo "Operador (XOR): Significa que solo un valor puede ser V. Si uno lo es, el otro debe ser F. <br>";
echo "Operador (!=): Significa NO. Tiene una mayor prioridad. Los valores no son iguales.<br>";
echo "Operador (NOT): Significa NO. Tiene menor prioridad. Opera como (!=). <br><br>";

echo "IMPORTANTE: Los operadores de comparación siempre devuelven un valor V o F.";
?>