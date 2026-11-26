Resolución

1. Para inicializar una conexión con un servidor MySQL, PHP ofrece la función mysqli_connect().

2. Los tres parámetros generalmente necesarios son:

host: dirección del servidor.

username: nombre del usuario.

password: contraseña del usuario.

3. Para seleccionar una base de datos se utiliza la función mysqli_select_db().

4. Esta función recibe como parámetros la conexión con el servidor y el nombre de la base de datos que se desea seleccionar.

5. La función mysqli_query() se utiliza para enviar y ejecutar una consulta SQL en la base de datos. Requiere como parámetros la conexión y la consulta SQL.

6. La cláusula or die() se utiliza para interrumpir la ejecución del programa cuando ocurre un error y mostrar un mensaje.

7. La función mysqli_error() permite obtener el mensaje de error de la última operación realizada sobre la conexión MySQL.

Explicación del código

<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
    <tr>
        <td><?php echo $fila[0]; ?></td>
        <td><?php echo $fila[1]; ?></td>
        <td><?php echo $fila[2]; ?></td>
    </tr>
<?php
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>

El código recorre los registros obtenidos de una consulta SQL y los muestra en una tabla HTML.

mysqli_fetch_array($vResultado): obtiene una fila del resultado y la devuelve como un array.

while: repite el proceso mientras existan filas disponibles.

$fila[0], $fila[1] y $fila[2]: acceden a los valores de las tres primeras columnas.

echo: muestra los valores dentro de las celdas de la tabla HTML.

mysqli_free_result($vResultado): libera la memoria utilizada por el resultado de la consulta.

mysqli_close($link): cierra la conexión con la base de datos.

De esta manera, cada registro recuperado se muestra como una fila de la tabla HTML.
