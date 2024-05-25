<?php
// Function
function isPalindrome($number) {
    $numberStr = (string) $number;
    return $numberStr === strrev($numberStr);
}

//  largest palindrome
$largestPalindrome = 0;

// loop through three-digit num
for ($i = 100; $i < 1000; $i++) {
    for ($j = 100; $j < 1000; $j++) {
        $product = $i * $j;
        if ($product > $largestPalindrome && isPalindrome($product)) {
            $largestPalindrome = $product;
        }
    }
}

echo $largestPalindrome;
?>

<?php
////optimezed code for// Function to check if a number is a ///////
function isPalindrome($number) {
    $numberStr = (string) $number;
    return $numberStr === strrev($numberStr);
}

// Variable to store the largest palindrome found
$largestPalindrome = 0;

// Loop through three-digit numbers
for ($i = 999; $i >= 100; $i--) {
    for ($j = $i; $j >= 100; $j--) { // Start $j from $i to avoid redundant calculations
        $product = $i * $j;
        if ($product <= $largestPalindrome) {
            break; // Exit early if the product is less thanlargest palindrome  found
        }
        if (isPalindrome($product)) {
            $largestPalindrome = $product;
        }
    }
}

echo $largestPalindrome;
?>

