<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo un operador ternario:<br>
Si disponemos de tres (3) expresiones, la primera una condición, la segunda que puede cumplir la condición y la tercer que cumple la condición en caso de no hacerla la anterior, empleamos un operador ternario:<br>
Si tenemos: (\$edad) y (\$resultado) y queremos determinar una respuesta según la edad, se puede hacer fácil sin necesidad de if:<br><br>
\$resultado = (\$edad > = 18) ? 'Mayor de edad' : 'Menor de edad'<br>
echo = \$resultado<br><br>
Veamos un ejemplo donde el valor de la variable de edad es 10: <br><br>";

$edad=10;
$resultado= ($edad >= 18)? "Mayor de edad<br>" : "Menor de edad<br>";
echo "Usted ha sido calificado como: ". "$resultado"; 

?>











