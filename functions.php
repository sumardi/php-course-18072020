<?php

// User-Defined Functions

// declaring function
function greet(string $name, int $age, string $language = 'malay') // default value
{
    if ($language == 'english') {
        echo 'Hello, Welcome ' . $name . '!<br />';
        echo 'Your age is ' . $age . '<br />';
    } elseif ($language == 'malay') {
        echo 'Hello, Selamat Datang ' . $name . '!<br />';
        echo 'Umur anda adalah ' . $age . '<br />';
    }
}

// call function
greet('Sumardi', 17, 'english');
greet('Abu', 15, 'malay');
greet('Azrin', 2, 'malay');
greet('Siti', 5);


// Callable
function runFunction(callable $func)
{
    echo 'Function is running <br />';

    $func();
    // function () {
    //     echo 'Yay!';
    // }
}

// call runFunction
runFunction(function () {
    echo 'Yay!';
});

function sum($num1, $num2)
{
    return $num1 + $num2;
}
echo '<br />';
var_dump(sum(2, 4));
echo '<br />Sum 2 + 4 = ' . sum(2, 4);
echo '<br />Total 200 + 465 = ' . sum(200, 467);

echo '<br />';
$number = 10; // global scope
$age = 17;
function num()
{
    // method 1
    global $number, $age;
    echo $number;

    // method 2
    echo $GLOBALS['number'];
    echo $GLOBALS['age'];
}
num();
echo $number;

// static scope
function test()
{
    static $number = 0;
    echo $number;
    $number = $number + 5;
}
echo '<br />';
test(); // 0
echo '<br />';
test(); // 5
echo '<br />';
test(); // 10
