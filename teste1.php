<?php
function calcular($num1, $num2, $operador) {
    switch ($operador) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                echo "Erro: Divisão por zero não é permitida." . PHP_EOL;
                return null;
            }
        default:
            echo "Operador inválido." . PHP_EOL;
            return null;
    }
}

echo "\n======== Exercise 1: Simple Calculator ========\n" . PHP_EOL;

$num1 = readline("Digite o primeiro número: ");
$operador = readline("Digite o operador (+, -, *, /): ");
$num2 = readline("Digite o segundo número: ");

$resultado = calcular((float)$num1, $operador, (float)$num2);

if ($resultado !== null) {
    echo "Resultado: $resultado" . PHP_EOL;
}
?>