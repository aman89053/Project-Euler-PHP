<?php
// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

// Find the 10001st prime number
$primeCount = 0;
$number = 1;
while ($primeCount < 10001) {
    $number++;
    if (isPrime($number)) {
        $primeCount++;
    }
}

echo  $number;
?>
