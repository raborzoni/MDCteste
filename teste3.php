<?php
function calcularFatorial($numero) {
    if ($numero === 0 || $numero === 1) {
        return 1;
    } else {
        return $numero * calcularFatorial($numero - 1);
    }
}

// Início do programa
echo "\n======== Exercise 3: Factorial ========\n" . PHP_EOL;

$numero = (int) readline("Digite um número para calcular o fatorial: ");

if ($numero < 0) {
    echo "O número deve ser não negativo.\n";
} else {
    $fatorial = calcularFatorial($numero);
    echo "O fatorial de $numero é: $fatorial\n";
}
?>