<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Variables de sesión</title>
</head>

<body>

    <h1>Ingreso de usuario</h1>

    <form action="guardar.php" method="POST">

        <label>Nombre de usuario:</label>
        <input type="text" name="usuario" required>

        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="clave" required>

        <br><br>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>
