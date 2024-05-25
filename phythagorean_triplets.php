<?php
function findPythagoreanTriplet($sum) {
    for ($a = 1; $a < $sum / 3; $a++) {
        for ($b = $a + 1; $b < $sum / 2; $b++) {
            $c = $sum - $a - $b;
            if ($a * $a + $b * $b == $c * $c) {
                return [$a, $b, $c];
            }
        }
    }
    return [0, 0, 0]; // If no triplet is found
}

$sum = 1000;
list($a, $b, $c) = findPythagoreanTriplet($sum);//list is used to assign values yo a list of variables in one operation

  $product = $a * $b * $c;
    echo "The Pythagorean triplet is a = $a, b = $b, c = $c";
?>



<?php
/////////////////////////optimzed code/////////////////////////////////////////
function findPythagoreanTriplet($sum) {
    for ($a = 1; $a < $sum / 3; $a++) {
        for ($b = $a + 1; $b < $sum / 2; $b++) {
            $c = $sum - $a - $b;
            if ($a * $a + $b * $b == $c * $c) {
                return [$a, $b, $c];
            }
        }
    }
    return [0, 0, 0]; // If no triplet is found
}

$sum = 1000;
list($a, $b, $c) = findPythagoreanTriplet($sum); 
if ($a != 0 && $b != 0 && $c != 0) {//////// aviod unnessarcy iterations
    $product = $a * $b * $c;
    echo "The Pythagorean triplet is a = $a, b = $b, c = $c ";
}
?>

