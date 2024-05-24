<?php
//  generate prime numbers using Sieve of Eratosthenes
function generatePrimes($limit) {
    $sieve = array_fill(2, $limit, true);// array_fill(index, number, value)
    for ($i = 2; $i * $i <= $limit; $i++) {
        if ($sieve[$i]) {
            for ($j = $i * $i; $j <= $limit; $j += $i) {
                $sieve[$j] = false;
            }
        }
    }
    return array_keys(array_filter($sieve));
}

// sum of all prime numbers below two million
$limit = 2000000;
$primes = generatePrimes($limit);
$sum = array_sum($primes);

echo  $sum;
?>
