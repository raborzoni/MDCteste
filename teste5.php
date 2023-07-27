<?php
function lerEntrada() {

    echo "\n======== Exercise 5: Table ========\n" . PHP_EOL;

    echo "Digite um número: ";
    $handle = fopen ("php://stdin","r");
    $numero = fgets($handle);
    return trim($numero);
}

function exibirTabela($numero) {
    echo "\nTabela de multiplicação do número $numero:";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
}

// Recebe o número digitado pelo usuário
$numero = lerEntrada();

// Exibe a tabela
exibirTabela($numero);
?>