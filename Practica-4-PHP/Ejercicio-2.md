## Ejercicio 2: Equivalencia de estructuras de control

### a) Estructuras `while` y `do while`

**Primer código:**

```php
$i = 1;

while ($i <= 10) {
    print $i++;
}
```

**Segundo código:**

```php
$i = 1;

while ($i <= 10):
    print $i;
    $i++;
endwhile;
```

**Tercer código:**

```php
$i = 0;

do {
    print ++$i;
} while ($i < 10);
```

**Análisis:**

- En el primer código, `while` comprueba que `$i` sea menor o igual a 10. Luego imprime el valor y lo incrementa.
- En el segundo código se utiliza otra sintaxis de `while`, con `endwhile`. Primero imprime `$i` y después lo incrementa.
- En el tercer código se utiliza `do while`, que ejecuta el bloque al menos una vez antes de comprobar la condición. El operador `++$i` incrementa primero la variable y luego imprime su valor.

**Salida de los tres códigos:**

```text
12345678910
```

**Conclusión:** los tres códigos son equivalentes en este caso, porque muestran los números del 1 al 10.

### b) Diferentes formas de utilizar `for`

**Primer código:**

```php
for ($i = 1; $i <= 10; $i++) {
    print $i;
}
```

**Segundo código:**

```php
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }

    print $i;
}
```

**Tercer código:**

```php
$i = 1;

for (;;) {
    if ($i > 10) {
        break;
    }

    print $i;
    $i++;
}
```

**Cuarto código:**

```php
for ($i = 1; $i <= 10; print $i, $i++);
```

**Análisis:**

- El primer código utiliza un `for` tradicional, con inicialización, condición e incremento.
- El segundo código omite la condición del `for` y utiliza `break` para finalizar el ciclo cuando `$i` supera 10.
- El tercer código omite las tres expresiones del `for` y utiliza una condición interna con `break` para controlar la finalización. El incremento se realiza dentro del bloque.
- El cuarto código coloca las expresiones de impresión e incremento en la tercera expresión del `for`, que se ejecuta al finalizar cada iteración.

**Salida esperada de los cuatro códigos:**

```text
12345678910
```

**Conclusión:** los cuatro fragmentos representan distintas formas de implementar un ciclo que recorre los números del 1 al 10. El cuarto ejemplo debe interpretarse según la sintaxis pretendida por el enunciado; tal como está escrito, conviene comprobarlo en PHP porque la expresión `print $i, $i++` puede presentar un problema de sintaxis.

### c) Estructuras `if / elseif` y `switch`

**Primer código:**

```php
if ($i == 0) {
    print "i equals 0";
} elseif ($i == 1) {
    print "i equals 1";
} elseif ($i == 2) {
    print "i equals 2";
}
```

**Segundo código:**

```php
switch ($i) {
    case 0:
        print "i equals 0";
        break;

    case 1:
        print "i equals 1";
        break;

    case 2:
        print "i equals 2";
        break;
}
```

**Análisis:**

El primer código utiliza una estructura condicional `if / elseif` para comprobar el valor de `$i`.

El segundo utiliza `switch`, que permite evaluar una variable y ejecutar diferentes instrucciones según el valor que tenga.

En ambos casos:

- Si `$i` vale 0, se imprime `i equals 0`.
- Si `$i` vale 1, se imprime `i equals 1`.
- Si `$i` vale 2, se imprime `i equals 2`.
- Si tiene otro valor, no se imprime nada.

La instrucción `break` permite salir del `switch` una vez ejecutado el caso correspondiente, evitando que se ejecuten los siguientes.

**Conclusión:** ambos códigos son equivalentes para los valores evaluados, porque producen la misma salida para cada uno de los casos.

