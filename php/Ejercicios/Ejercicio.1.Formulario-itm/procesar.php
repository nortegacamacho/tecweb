<?php
require "utilidades.php";

$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$edad = $_POST["edad"];
$dni = $_POST["dni"];

echo "<h1>Datos de la persona</h1><br>";

echo "Nombre: " . $nombre . "<br>";
echo "Primer apellido: " . $apellido1 . "<br>";
echo "Segundo apellido: " . $apellido2 . "<br>";
echo "Edad: " . $edad . "<br>";
echo "DNI: " . $dni . "<br>";

if(es_mayor_de_edad ($edad)){ 
    echo "El usuario es mayor de edad";
    }else{ 
        echo "El usuario es menor de edad";
}

?>