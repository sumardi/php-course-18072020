<?php

// For Loop
// for (initial; condition; loop-end)
for ($i = 0; $i <= 5; $i++) {
    echo $i . ' <br />';
}

$students = ['Fatin', 'Nadiah', 'Abu', 'Sarah'];
echo '<ul>';
for ($index = 0; $index < count($students); $index++) {
    echo '<li>' . $students[$index] . '</li>';
}
echo '</ul>';
