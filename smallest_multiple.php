<?php
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

function lcmOfRange($start, $end) {
    $lcm = 1;
    for ($i = $start; $i <= $end; $i++) {
        $lcm = lcm($lcm, $i);
    }
    return $lcm;
}

$smallestMultiple = lcmOfRange(1, 20);
echo  $smallestMultiple;
?>



<?php
//////opyimized xode//////////////////
function gcd($a, $b) {
    while ($b != 0) {
        $a = $a % $b;
        if ($a == 0) {
            return $b;
        }
        $b = $b % $a;
    }
    return $a;
}

function lcm($a, $b) {
    return ($a / gcd($a, $b)) * $b;
}

function lcmOfRange($start, $end) {
    $lcm = 1;
    for ($i = $start; $i <= $end; $i++) {
        $lcm = lcm($lcm, $i);
    }
    return $lcm;
}

$smallestMultiple = lcmOfRange(1, 20);
echo $smallestMultiple;
?>
