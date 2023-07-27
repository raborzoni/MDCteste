<?php
function calcularInvestimento($capitalInicial, $taxaJuros, $tempoInvestimento)
{
    // Fórmula do montante em juros compostos: M = P * (1 + r)^t
    $montante = $capitalInicial * pow(1 + ($taxaJuros / 100), $tempoInvestimento);

    return $montante;
}

echo "\n======== Exercise 8: Interest Calculation ========\n" . PHP_EOL;

// Solicita os valores ao usuário
$capitalInicial = floatval(readline("Digite o capital inicial: "));

$taxaJuros = floatval(readline("Digite a taxa de juros (em %): "));

$tempoInvestimento = intval(readline("Digite o tempo de investimento (em meses): "));

// Chama a função para calcular o valor final do investimento
$valorFinal = calcularInvestimento($capitalInicial, $taxaJuros, $tempoInvestimento);

// Exibe o valor final do investimento
echo "O valor final do investimento será: R$ " . number_format($valorFinal, 2, ',', '.');
?>