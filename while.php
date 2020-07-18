<?php

// while loop
$a = 1;
while ($a < 10) {
    echo 'Now $a is ' . $a . '<br />';
    $a++; // increment
}

$b = 10;
do {
    echo 'Now $b is ' . $b . '<br >';
    $b--;
} while ($b > 0);

// while-break
$a = 0;
while ($a < 10) {
    echo $a . '<br />';
    if ($a === 5) {
        break;
    }
    $a++;
}

// while-continue
$a = 0;
while ($a < 10) {
    if ($a === 5) {
        $a++;
        continue; // 5 is not printed
    }
    echo $a . '<br />';
    $a++;
}
