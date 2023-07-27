<?php

function palindromo($word) {
    // Remover espaços em branco e converter para letras minúsculas
    $cleanWord = str_replace(' ', '', strtolower($word));
    
    // Inverter a palavra
    $reversedWord = strrev($cleanWord);
    
    // Verificar se a palavra invertida é igual à palavra original
    return $cleanWord === $reversedWord;
}

echo "\n======== Exercise 4: Palindrome ========\n" . PHP_EOL;

echo "Digite uma palavra: ";
$word = trim(fgets(STDIN));

if (palindromo($word)) {
    echo "\nA palavra '$word' é um palíndromo.";
} else {
    echo "\nA palavra '$word' não é um palíndromo.";
}

?>