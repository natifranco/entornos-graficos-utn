
<?php

// Verificar si existe la cookie contador
if (isset($_COOKIE['contador'])) {

    // Incrementar la cantidad de visitas
    $contador = $_COOKIE['contador'] + 1;

    echo "Bienvenido nuevamente.<br>";
    echo "Visitaste esta página " . $contador . " veces.";

} else {

    // Primera visita
    $contador = 1;

    echo "¡Bienvenido! Esta es tu primera visita.";

}

// Crear o actualizar la cookie
setcookie("contador", $contador, time() + (86400 * 30), "/");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
</head>

<body>

    <h1>Contador de visitas</h1>

</body>
</html>
