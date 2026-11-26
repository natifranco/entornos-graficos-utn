a)

Salida:

bar1

El array contiene la clave "x" con el valor "bar" y la clave 12 con el valor true.

El primer echo imprime bar y el segundo imprime 1, ya que PHP representa el valor booleano true como 1 al utilizar echo.

b)

Salida:

5942

Se utiliza un array multidimensional, es decir, un array que contiene otro array.

$matriz["unamatriz"][6] devuelve 5.

$matriz["unamatriz"][13] devuelve 9.

$matriz["unamatriz"]["a"] devuelve 42.

Los valores se imprimen consecutivamente, sin espacios ni saltos de línea.

c)

Salida: No produce ninguna salida por pantalla.

Primero se crea un array con las claves 5 y 12. Luego se agrega el valor 56 con la clave 13 y el valor 42 con la clave "x".

Después, unset($matriz[5]) elimina el elemento cuya clave es 5, mientras que unset($matriz) elimina completamente el array.

No aparece nada en pantalla porque el código no utiliza echo ni print.
