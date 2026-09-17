<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ejercicio formulario en PHP">
    <title>Formulario PHP</title>
</head>

<body>

<h1>Formulario para datos personales elaborado con PHP</h1>
<br>

<form method="post" name="form1" action="procesar.php">

    <fieldset>
        <legend>Información del usuario</legend>
        <br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Indique su nombre aquí">
        <br>

        <label for="apellido1">Primer apellido:</label>
        <input type="text" name="apellido1" id="apellido1" placeholder="Indique su primer apellido aquí">
        <br>

        <label for="apellido2">Segundo apellido:</label>
        <input type="text" name="apellido2" id="apellido2" placeholder="Indique su segundo apellido aquí">
        <br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" placeholder="Indique su edad aquí">
        <br>

        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" placeholder="Indique su número de DNI aquí">
        <br>

        <input type="submit" name="bot_enviar" id="enviar" value="Enviar">

    </fieldset>

</form>

</body>
</html>
