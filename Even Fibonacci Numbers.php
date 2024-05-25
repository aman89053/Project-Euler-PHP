<?php
// Returns the sum of even Fibonacci numbers
function evenFibSum($limit) {
    if ($limit < 2) {
        return 0;
    }

    // Initialize the first two even Fibonacci numbers
    $ef1 = 0;
    $ef2 = 2;
    $sum = $ef1 + $ef2;

    // Calculate the sum of even Fibonacci 
    for ($i = 2; $ef2 <= $limit; $i++) {
        // Get the next even value of the Fibonacci 
        $ef3 = 4 * $ef2 + $ef1;

        //  break the loop
        if ($ef3 > $limit) {
            break;
        }

        // Move to the next even number and update the sum basically swapping
        $ef1 = $ef2;
        $ef2 = $ef3;
        $sum += $ef2;
    }

    return $sum;
}

$limit = 4000000;
echo evenFibSum($limit);
?>



<?php
/////  optimezed version of Function to return the sum of even Fibonacci numbers up to a given limit///
function evenFibSum($limit) {
    if ($limit < 2) {
        return 0;
    }

    // Initialize the first two even Fibonacci numbers
    $firstEvenFib = 0;
    $secondEvenFib = 2;
    $sum = $secondEvenFib; // Starting sum with the second even Fibonacci number

    // Calculate the sum of even Fibonacci numbers up to the limit
    while ($secondEvenFib <= $limit) {
        // Get the next even Fibonacci number
        $nextEvenFib = 4 * $secondEvenFib + $firstEvenFib;

        // Break the loop if the next even Fibonacci number exceeds the limit
        if ($nextEvenFib > $limit) {
            break;
        }

        // Update the sum with the new even Fibonacci number
        $sum += $nextEvenFib;

        // Move to the next even Fibonacci numbers
        $firstEvenFib = $secondEvenFib;
        $secondEvenFib = $nextEvenFib;
    }

    return $sum;
}

// Define the limit
$limit = 4000000;

// Calculate and display the sum of even Fibonacci numbers up to the limit
echo evenFibSum($limit);
?>

