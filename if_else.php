<?php

$day = date('j');
// var_dump($day); // 18
if ($day < 15) {
    echo 'You are ';
    echo 'spending the first half of the month.';
} else
    echo 'More than 15.';

// if-elseif
if ($day >= 21) {
    $quarter = 'last';
} elseif ($day >= 14) {
    $quarter = 'third';
} elseif ($day >= 7) {
    $quarter = 'second';
} else {
    $quarter = 'first';
}
echo '<br />';
echo 'You are spending the ' . $quarter . ' quarter of the month.';

echo '<br />';
$a = 10;
if ($a >= 0) {
    echo 'Positive Numbers.';
    if ($a % 10 === 0) { // nested if statement
        echo 'The number is a multiple of 10.';
    }
} else {
    echo 'Negative Numbers.';
}
