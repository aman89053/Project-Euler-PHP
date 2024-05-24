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
