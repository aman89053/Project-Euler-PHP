<?php
$sum = 0;

// Iterate through numbers from 1 to 999
for ($i = 1; $i < 1000; $i++) {
    // Check if the number is a multiple of 3 or 5
    if ($i % 3 === 0 || $i % 5 === 0) {
        $sum += $i; 
        // Add the number to the sum
    }
}

// Print the result
echo  $sum;
?>
