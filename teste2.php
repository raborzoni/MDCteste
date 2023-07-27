<?php
function primos($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function primeirosPrimos($n) {
    $primes = array();
    $number = 2;

    while (count($primes) < $n) {
        if (primos($number)) {
            $primes[] = $number;
        }
        $number++;
    }

    return $primes;
}

$firstPrimes = primeirosPrimos(10);

echo "\n======== Exercise 2: Prime Numbers ========\n" . PHP_EOL;
echo "Os 10 primeiros números primos são: " . implode(", ", $firstPrimes);
?>
