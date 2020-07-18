<?php

// operator
$a = 4;
$b = 2;

echo $a + $b . "<br />"; // 6
echo $a - $b . "<br />"; // 2
echo $a / $b . "<br />"; // 2
echo $a * $b . "<br />"; // 8
echo $a % $b . "<br />"; // 0
echo $a ** $b . "<br />"; // 16

echo $a += $b; // $a = $a + $b = 6
echo "<br />";
echo $a -= $b; // $a = $a - $b
echo "<br />";

$firstName = 'Sumardi';
$lastName = ' Shukor';
$firstName .= $lastName; // full name
// $firstName = $firstName . $lastName
echo $firstName; // Sumardi Shukor
echo '<br />';

// increment
$a = 1;
echo $a . '<br />';
echo ++$a . '<br />'; // pre-inc
echo $a++ . '<br />'; // post-inc
echo $a;
echo '<br />';

// array operator
$c = [1, 2];
$d = [3, 4, 5, 6];
$e = $c + $d; // union array
echo "<pre>";
var_dump($e); // [1, 2, 5, 6]
echo "</pre>";
var_dump($c == $d); // false
var_dump($c != $d); // true
