<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>

<body>

    <h1>Validación de alumnos</h1>

    <?php if (isset($_SESSION['nombre'])) { ?>

        <h2>¡Bienvenido/a, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h2>

        <p>El alumno se encuentra registrado en la base de datos.</p>

    <?php } else { ?>

        <h2>Acceso denegado</h2>

        <p>El correo electrónico ingresado no corresponde a un alumno registrado.</p>

    <?php } ?>

    <p><a href="index.php">Volver al formulario</a></p>

</body>
</html>
