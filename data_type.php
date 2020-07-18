<?php

// Data Type
$a = 'Sumardi'; // String
var_dump($a);
$b = 2; // Integer
var_dump($b);
$c = true; // Boolean
var_dump($c);
$d = 3.142; // Float
var_dump($d);
$e = [1, 2, 3]; // Array
var_dump($e);
$f = array('Selangor', 'KL'); // Array
var_dump($f);
class Student // Object-Oriented
{
}
$g = new Student; // Object
var_dump($g);

// var_dump($a); troubleshoot
// debugging

// typecasting
$x = 2; // int
$y = 4; // int
$z = 3.142; // float
$zz = (int) $z; // int (manual)
echo "<pre>";
var_dump($x / $y); // automatic
var_dump($y / $x); // automatic
var_dump($z);
var_dump($zz);
echo "</pre>";
