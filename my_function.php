<?php

function html_inputtext($name, $label)
{
    return '<label>' . $label . '</label>
    <input type="text" name="' . $name . '">';
}

function html_textarea($name, $label, $cols = 30, $rows = 10)
{
    return '<label>' . $label . '</label>
    <br /><textarea name="' . $name . '" id="" cols="' . $cols . '" rows="' . $rows . '"></textarea><br />';
}
