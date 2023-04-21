<?php
function my_callback($item) {
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);


//callback function on userdefined functions
function exclaim($str) {
    return $str . "! ";
}

function ask($str) {
    return $str . "? ";
}

function printt($str, $format) {
    // Calling the $format callback function
    echo $format($str);
}

printt("Hello world", "exclaim");
printt("Hello world", "ask");