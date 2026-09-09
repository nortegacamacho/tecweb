# Tutorial de PHP

Para ejecutar el código PHP en CodeSpace, ir al directorio donde se encuentra el archivo con php.

Ejecutar en el terminal: 
```bash
php -S 0.0.0.0:8000
```

## Primer programa:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer programa PHP</title>
</head>
<body>

    <h1>Mi primera página PHP</h1>

    <p>
        <?php
            echo "¡Hola Mundo desde PHP!";
        ?>
    </p>

</body>
</html>
```
## Comentarios
```php
<?php

// Comentario de una linea.

/* Comentarios de Varias Lineas */

?>

```

## Variables
```php
<?php

/*
====================================
 EJEMPLO DE TIPOS DE DATOS EN PHP
====================================
*/
/*
------------------------------------
1. BOOLEAN (bool)
------------------------------------
Un booleano solo puede tener dos valores:
- true  (verdadero)
- false (falso)
*/

$usuarioLogueado = true;
$esAdministrador = false;

echo "<h2>Boolean</h2>";
echo "Usuario logueado: ";
var_dump($usuarioLogueado);

echo "<br>";

echo "Es administrador: ";
var_dump($esAdministrador);

echo "<hr>";
/*
------------------------------------
2. INTEGER (int)
------------------------------------
Representa números enteros.
No tiene decimales.
*/
$edad = 25;
$numeroEmpleados = 150;

echo "<h2>Integer (int)</h2>";
echo "Edad: $edad <br>";
echo "Número de empleados: $numeroEmpleados";

echo "<hr>";
/*
------------------------------------
3. FLOAT
------------------------------------
Representa números con decimales.
También se conoce como double.
*/
$precio = 19.95;
$temperatura = 22.7;

echo "<h2>Float</h2>";
echo "Precio: $precio €<br>";
echo "Temperatura: $temperatura ºC";

echo "<hr>";
/*
------------------------------------
4. STRING
------------------------------------
Representa cadenas de texto.
Siempre van entre comillas.
*/
$nombre = "Jose";
$ciudad = "Valladolid";

echo "<h2>String</h2>";
echo "Nombre: $nombre <br>";
echo "Ciudad: $ciudad";

echo "<hr>";
/*
------------------------------------
5. ARRAY
------------------------------------
Permite almacenar múltiples valores
dentro de una única variable.
*/
$colores = ["Rojo", "Verde", "Azul"];

echo "<h2>Array</h2>";

echo "Primer color: " . $colores[0] . "<br>";
echo "Segundo color: " . $colores[1] . "<br>";
echo "Tercer color: " . $colores[2] . "<br>";

echo "<hr>";
/*
------------------------------------
ARRAY ASOCIATIVO
------------------------------------
Los elementos tienen clave => valor.
*/

$persona = [
    "nombre" => "Jose",
    "edad" => 40,
    "ciudad" => "Valladolid"
];
echo "<h2>Array Asociativo</h2>";
echo "Nombre: " . $persona["nombre"] . "<br>";
echo "Edad: " . $persona["edad"] . "<br>";
echo "Ciudad: " . $persona["ciudad"];

echo "<hr>";

/*
------------------------------------
MOSTRAR EL TIPO DE UNA VARIABLE
------------------------------------
La función gettype() devuelve el tipo.
*/

echo "<h2>Tipos de datos</h2>";

echo "Tipo de \$usuarioLogueado: " . gettype($usuarioLogueado) . "<br>";
echo "Tipo de \$edad: " . gettype($edad) . "<br>";
echo "Tipo de \$precio: " . gettype($precio) . "<br>";
echo "Tipo de \$nombre: " . gettype($nombre) . "<br>";
echo "Tipo de \$colores: " . gettype($colores) . "<br>";

?>
```


