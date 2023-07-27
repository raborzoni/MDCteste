<?php
function contarVogais($texto) {
    // Converter a string para letras minúsculas para contar corretamente as vogais
    $texto = strtolower($texto);

    // Array com as vogais
    $vogais = array('a', 'e', 'i', 'o', 'u');

    // Inicializar a variável de contagem
    $contagem = 0;

    // Percorrer cada caractere da string
    for ($i = 0; $i < strlen($texto); $i++) {

        // Verificar se o caractere é uma vogal
        if (in_array($texto[$i], $vogais)) {

            // Incrementar a contagem se for uma vogal
            $contagem++;
        }
    }

    return $contagem;
}

echo "\n======== Exercise 6: Vowel Counter ========\n" . PHP_EOL;

// Solicitar ao usuário uma frase
echo "Digite uma frase: ";
$frase = trim(fgets(STDIN));

// Chamar a função para contar as vogais na frase
$numVogais = contarVogais($frase);

// Exibir o resultado
echo "\nA frase tem $numVogais vogais.\n";
?>