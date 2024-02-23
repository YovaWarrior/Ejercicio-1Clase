<?php

// Tablas de multiplicar del 4 y del 6
echo "Tabla de multiplicar del 4:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "4 x $i = " . (4 * $i) . "\n";
}

echo "\nTabla de multiplicar del 6:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "6 x $i = " . (6 * $i) . "\n";
}

// Calcular el factorial de un número
$numeroFactorial = 5; 
$factorial = 1;
for ($i = 1; $i <= $numeroFactorial; $i++) {
    $factorial *= $i;
}
echo "\nEl factorial de $numeroFactorial es: $factorial\n";

// Verificar si un número es primo o no
$numeroPrimo = 11; 
$esPrimo = true;
for ($i = 2; $i <= sqrt($numeroPrimo); $i++) {
    if ($numeroPrimo % $i == 0) {
        $esPrimo = false;
        break;
    }
}
if ($esPrimo && $numeroPrimo > 1) {
    echo "\n$numeroPrimo es un número primo.\n";
} else {
    echo "\n$numeroPrimo no es un número primo.\n";
}

// Verificar si un número es par
$numeroPar = 15; 
if ($numeroPar % 2 == 0) {
    echo "\n$numeroPar es un número par.\n";
} else {
    echo "\n$numeroPar no es un número par.\n";
}

// Mostrar la tabla de multiplicar de un número
$numeroTabla = 9; 
echo "\nTabla de multiplicar del $numeroTabla:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "$numeroTabla x $i = " . ($numeroTabla * $i) . "\n";
}
?>