```php
<?php

$nombre = "";
$apellido1 = "";
$apellido2 = "";
$edad = "";
$sexo = "";
$meses = [];
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $edad = $_POST["edad"];

    // Comprobar el sexo
    if (isset($_POST["sexo"])) {
        $sexo = $_POST["sexo"];
    }

    // Comprobar los meses seleccionados
    if (isset($_POST["meses"])) {
        $meses = $_POST["meses"];
    }

    // Debe elegir entre 1 y 3 meses
    if (count($meses) < 1 || count($meses) > 3) {
        $error = "Debes seleccionar entre 1 y 3 meses de vacaciones.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Formulario</title>
</head>

<body>

<h1>Formulario de datos personales</h1>

<form method="POST" action="">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <br><br>

    <label>Primer apellido:</label>
    <input type="text" name="apellido1" required>
    <br><br>

    <label>Segundo apellido:</label>
    <input type="text" name="apellido2" required>
    <br><br>

    <label>Edad:</label>
    <input type="number" name="edad" min="0" required>
    <br><br>


    <h3>Sexo:</h3>

    <input type="radio" name="sexo" value="Hombre" required>
    <label>Hombre</label>

    <input type="radio" name="sexo" value="Mujer">
    <label>Mujer</label>

    <br><br>


    <h3>Meses preferidos para las vacaciones:</h3>

    <input type="checkbox" name="meses[]" value="Enero">
    <label>Enero</label>

    <input type="checkbox" name="meses[]" value="Febrero">
    <label>Febrero</label>

    <input type="checkbox" name="meses[]" value="Marzo">
    <label>Marzo</label>

    <input type="checkbox" name="meses[]" value="Abril">
    <label>Abril</label>

    <input type="checkbox" name="meses[]" value="Mayo">
    <label>Mayo</label>

    <input type="checkbox" name="meses[]" value="Junio">
    <label>Junio</label>

    <br><br>

    <input type="checkbox" name="meses[]" value="Julio">
    <label>Julio</label>

    <input type="checkbox" name="meses[]" value="Agosto">
    <label>Agosto</label>

    <input type="checkbox" name="meses[]" value="Septiembre">
    <label>Septiembre</label>

    <input type="checkbox" name="meses[]" value="Octubre">
    <label>Octubre</label>

    <input type="checkbox" name="meses[]" value="Noviembre">
    <label>Noviembre</label>

    <input type="checkbox" name="meses[]" value="Diciembre">
    <label>Diciembre</label>

    <br><br>

    <input type="submit" value="Enviar">

</form>


<?php if ($error != ""): ?>

    <h3 style="color:red;">
        <?php echo $error; ?>
    </h3>

<?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>

    <h2>Datos introducidos:</h2>

    <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>

    <p><strong>Primer apellido:</strong> <?php echo $apellido1; ?></p>

    <p><strong>Segundo apellido:</strong> <?php echo $apellido2; ?></p>

    <p><strong>Edad:</strong> <?php echo $edad; ?></p>

    <p><strong>Sexo:</strong> <?php echo $sexo; ?></p>

    <p><strong>Meses de vacaciones:</strong>
        <?php echo implode(", ", $meses); ?>
    </p>

<?php endif; ?>

</body>
</html>
```
