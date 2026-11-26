<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Datos de sesión</title>
</head>

<body>

    <h1>Datos almacenados en la sesión</h1>

    <?php if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) { ?>

        <p>Nombre de usuario: <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>

        <p>Contraseña: <?php echo htmlspecialchars($_SESSION['clave']); ?></p>

    <?php } else { ?>

        <p>No hay datos almacenados en la sesión.</p>

    <?php } ?>

    <p><a href="index.php">Volver al formulario</a></p>

</body>
</html>
