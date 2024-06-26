<?php
function largestPrimeFactor($n) {
    $largestPrime = -1;

    // Divide by 2 to remove all even factors
    while ($n % 2 == 0) {
        $largestPrime = 2;
        $n /= 2;
    }

    // Check for odd factors from 3 onwards
    for ($i = 3; $i <= sqrt($n); $i += 2) {
        while ($n % $i == 0) {
            $largestPrime = $i;
            $n /= $i;
        }
    }

    // If n is a prime number greater than 2
    if ($n > 2) {
        $largestPrime = $n;
    }

    return $largestPrime;
}

$n = 600851475143;
echo largestPrimeFactor($n);
?>


<?php
////////////////////////////////optimized code///////////////////////
function largestPrimeFactor($n) {
    $largestPrime = -1;

    while ($n % 2 == 0) {
        $largestPrime = 2;
        $n /= 2;
    }
    

    
    $sqrtN = sqrt($n); // Calculate square root once
    for ($i = 3; $i <= $sqrtN; $i += 2) {
        while ($n % $i == 0) {
            $largestPrime = $i;
            $n /= $i;
            $sqrtN = sqrt($n); // Recalculate square root after division
        }
    }

    
    if ($n > 2) {
        $largestPrime = $n;
    }

    return $largestPrime;
}

$n = 600851475143;
echo largestPrimeFactor($n);
?>
