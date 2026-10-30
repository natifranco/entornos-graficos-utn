## Ejercicio 5: Contador de visitas a una página web

### Objetivo

El ejercicio consiste en desarrollar un contador de visitas que almacena en un archivo de texto la cantidad de veces que se accedió a una página web.

Se utilizan dos archivos PHP:

- `contador.php`: contiene la lógica para leer, incrementar y guardar el contador.
- `visitas.php`: es la página que incluye el contador y lo muestra al usuario.

Además, se necesita un archivo de texto llamado `contador.dat`, donde se almacena el número de visitas.

### 1. Archivo `contador.php`

```php
<?php
    // Archivo para acumular el número de visitas
    $archivo = "contador.dat";

    // Abrir el archivo para lectura
    $abrir = fopen($archivo, "r");

    // Leer el contenido del archivo
    $cont = fread($abrir, filesize($archivo));

    // Cerrar el archivo
    fclose($abrir);

    // Abrir nuevamente el archivo para escritura
    $abrir = fopen($archivo, "w");

    // Agregar 1 visita
    $cont = $cont + 1;

    // Guardar la modificación
    $guardar = fwrite($abrir, $cont);

    // Cerrar el archivo
    fclose($abrir);

    // Mostrar el total de visitas
    echo "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>";
?>
```

### 2. Archivo `visitas.php`

```php
<html>
<head></head>
<body>
    <?php include("contador.php") ?>
</body>
</html>
```

Este archivo incorpora el contenido de `contador.php` mediante la instrucción `include()`. De esta manera, cada vez que se accede a `visitas.php`, se ejecuta el contador.

### 3. Archivo `contador.dat`

Se debe crear un archivo de texto llamado `contador.dat` en la misma carpeta que los archivos PHP.

Su contenido inicial puede ser:

```text
0
```

El archivo debe contar con permisos de lectura y escritura para que PHP pueda modificarlo.

### 4. Explicación de las funciones utilizadas

| Función | Utilidad |
|---|---|
| `fopen()` | Abre un archivo para realizar operaciones. |
| `fread()` | Lee el contenido de un archivo. |
| `fclose()` | Cierra un archivo abierto. |
| `filesize()` | Devuelve el tamaño de un archivo en bytes. |
| `fwrite()` | Escribe información en un archivo. |
| `include()` | Incorpora y ejecuta el contenido de otro archivo PHP. |

### 5. Modos de apertura de archivos

En el ejercicio se utilizan dos modos:

- `"r"`: abre el archivo únicamente para lectura. El archivo debe existir.
- `"w"`: abre el archivo para escritura. Si existe, elimina su contenido anterior; si no existe, intenta crearlo.

### 6. Funcionamiento paso a paso

1. Se indica el nombre del archivo donde se almacenará el contador.
2. Se abre `contador.dat` en modo lectura.
3. Se lee el número de visitas almacenado.
4. Se cierra el archivo.
5. Se vuelve a abrir en modo escritura.
6. Se incrementa el contador en una unidad.
7. Se guarda el nuevo valor mediante `fwrite()`.
8. Se cierra el archivo.
9. Se muestra en pantalla la cantidad actualizada de visitas.

### 7. Ejemplo de funcionamiento

Si el archivo `contador.dat` comienza con el valor 0:

| Acceso a la página | Valor almacenado |
|---|---|
| Primer acceso | 1 |
| Segundo acceso | 2 |
| Tercer acceso | 3 |
| Cuarto acceso | 4 |
| Quinto acceso | 5 |

En el quinto acceso, el usuario visualizará:

**Cantidad de visitas: 5**
