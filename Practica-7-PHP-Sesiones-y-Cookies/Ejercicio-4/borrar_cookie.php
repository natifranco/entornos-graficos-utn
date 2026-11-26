<?php

setcookie('titular', '', time() - 3600, '/');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Eliminar preferencia</title>
</head>

<body>

    <h1>Preferencia eliminada</h1>

    <p>Se eliminó la cookie con tu preferencia de noticias.</p>

    <p><a href="periodico.php">Volver al periódico</a></p>

</body>
</html>
