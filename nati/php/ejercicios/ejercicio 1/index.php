<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Formulario</title>
</head>
<body>
    <h1>Formulario de datos personales</h1>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido1">Primer apellido:</label>
        <input type="text" id="apellido1" name="apellido1" required><br><br>

        <label for="apellido2">Segundo apellido:</label>
        <input type="text" id="apellido2" name="apellido2" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
