<?php
require_once 'utilidades.php';

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$edad = $_POST['edad'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos procesados</title>
</head>
<body>
    <h1>Datos introducidos</h1>
    <p>Nombre: <?php echo htmlspecialchars($nombre); ?></p>
    <p>Primer apellido: <?php echo htmlspecialchars($apellido1); ?></p>
    <p>Segundo apellido: <?php echo htmlspecialchars($apellido2); ?></p>
    <p>Edad: <?php echo htmlspecialchars($edad); ?></p>

    <?php if (es_mayor_de_edad($edad)): ?>
        <p>Esta persona es mayor de edad.</p>
    <?php else: ?>
        <p>Esta persona no es mayor de edad.</p>
    <?php endif; ?>
</body>
</html>
