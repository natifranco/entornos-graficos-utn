<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $email_amigo = trim($_POST["email_amigo"]);

    if (
        $nombre != "" &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        filter_var($email_amigo, FILTER_VALIDATE_EMAIL)
    ) {

        $asunto = "Te recomiendo este sitio web";

        $cuerpo = "
        <html>
        <body>
            <h2>¡Hola!</h2>
            <p>" . htmlspecialchars($nombre) . " quiere recomendarte este sitio web.</p>
            <p>¡Te invitamos a visitarlo!</p>
            <p><a href='https://www.ejemplo.com'>Visitar sitio web</a></p>
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        if (mail($email_amigo, $asunto, $cuerpo, $headers)) {
            echo "La recomendación fue enviada correctamente.";
        } else {
            echo "No se pudo enviar la recomendación.";
        }

    } else {
        echo "Por favor, complete los campos correctamente.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recomendar sitio</title>
</head>
<body>

    <h1>Recomendá nuestro sitio a un amigo</h1>

    <form method="POST" action="">
        <label>Tu nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Tu correo electrónico:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Correo de tu amigo:</label><br>
        <input type="email" name="email_amigo" required><br><br>

        <input type="submit" value="Enviar recomendación">
    </form>

</body>
</html>
