<?php

// declare variable
$name = 'Sumardi Shukor';
$Name = 'Ali';
$nAmE = 'Abu';

// best practice
$first_name =  'Sumardi';
$firstName = 'Sumardi';

// don't
$FIRSTNAME = 'Siti';
$FIRST_NAME = 'SITI';

// echo 'Hello World';
// echo 'My name is Sumardi.';

// echo $nAmE;

// single line comment
# single line comment

/*
multi
line
comment
*/

$a = 1; // valid
// $1a = 2; // error
$b2 = 2; // valid
$_c = 3; // valid

$name1 = 'Sumardi'; // valid
$name2 = "Sumardi"; // valid

echo 'Nama saya $name1';
echo '<br />';
echo "Nama saya $name2";
echo '<br />';

// Constant
define('USERNAME', 'root');
echo USERNAME;
define('USERNAME', 'root2'); // error
echo USERNAME;

define('URL', 'http://domain.com');

echo URL;
echo '<br />';


// String
echo 'My name <u>Dato\' Sumardi</u>';
echo '<br />';
echo "<b>Price</b> : \$name \\";
echo '<br />';

// Concat
echo 'My name is ' . $name;
