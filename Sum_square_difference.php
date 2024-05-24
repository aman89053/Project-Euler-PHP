<?php
// Function to find the absolute difference between sum of squares and square of sum
function sumSquareDifference($n) {
    // Calculate the sum of squares
    $sumOfSquares = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sumOfSquares += $i * $i;
    }

    // Calculate the square of the sum
    $sum = ($n * ($n + 1)) / 2;
    $squareOfSum = $sum * $sum;

    // Calculate the absolute difference
    $difference = abs($sumOfSquares - $squareOfSum); //rounded to abslute value

    return $difference;
}

// difference for n = 100
$n = 100;
$difference = sumSquareDifference($n);

echo  $difference;
?>
