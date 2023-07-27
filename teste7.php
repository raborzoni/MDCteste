<?php

echo "\n======== Exercise 7: Grade Average ========\n" . PHP_EOL;
function nota($nomeDisciplina) {

    fwrite(STDOUT, "Digite a nota da disciplina {$nomeDisciplina}: ");
    $nota = trim(fgets(STDIN));
    return floatval($nota);
}

// Função para calcular a média das notas
function calcularMedia($notas) {
    $soma = array_sum($notas);
    return $soma / count($notas);
}

// Obtendo as notas do usuário
$notas = [];
$disciplinas = ['Matemática', 'Português', 'Algoritmo'];

foreach ($disciplinas as $disciplina) {
    $nota = nota($disciplina);
    $notas[] = $nota;
}

// Calculando a média
$media = calcularMedia($notas);

// Exibindo a média
echo "A média do aluno é: " . number_format($media, 1) . "\n";
?>