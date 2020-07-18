<?php

// indexed array
$fruits = ['Apple', 'Orange', 'Banana', 'Mango'];
echo $fruits[1] . '<br />'; // Orange

// associative array
$students = [
    'John' => 23,
    'Doe' => 16,
    'Smith' => 34
];
echo $students['John'] . '<br />'; // 23

// multidimensional array
$list = [
    'John' => ['age' => 23, 'country' => 'USA'],
    'Siti' => ['age' => 17, 'country' => 'Malaysia']
];
echo $list['John']['age'] . '<br />'; // 23
echo $list['John']['country'] . '<br />'; // USA
echo 'John is ' . $list['John']['age'] . ' years old, from '
    . $list['John']['country'];
echo '<br />';
echo '<ol>';
foreach ($list as $name => $data) {
    echo '<li>Name : ' . $name . ', Age : ' . $data['age'] .
        ', Country : ' . $data['country'] . '</li>';
}
echo '</ol>';

foreach ($fruits as $data) {
    echo $data . ', ';
}

echo '<br />';
$color1 = ['red', 'green'];
$color2 = ['blue', 'yellow', 'white'];
var_dump(array_merge($color1, $color2));
if (in_array('red', $color1)) {
    echo 'red is in the $color1';
}

// array_map
$array2 = array_map(function ($value) {
    return strtoupper($value);
}, $color1);
echo '<pre>';
var_dump($array2);
echo '</pre>';
