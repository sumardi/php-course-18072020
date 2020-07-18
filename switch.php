<?php

$score = rand(0, 4);
switch ($score) {
    case 0:
        echo 'Point 0, please try again!';
        break;
    case 1:
        echo 'Point 1';
        break;
    case 2:
        echo 'Point 2';
        break;
    default:
        echo 'You won!';
}
