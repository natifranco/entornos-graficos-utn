
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>El Diario</title>
</head>

<body>

    <h1>El Diario</h1>

    <h2>Elegí qué tipo de noticias querés ver</h2>

    <form action="periodico.php" method="POST">

        <input type="radio" name="titular" value="politica" required>
        Noticia política

        <br>

        <input type="radio" name="titular" value="economica">
        Noticia económica

        <br>

        <input type="radio" name="titular" value="deportiva">
        Noticia deportiva

        <br><br>

        <input type="submit" value="Guardar preferencia">

    </form>

    <p><a href="periodico.php">Ingresar al periódico</a></p>

</body>
</html>
