<?php

function is_palindrome(string $str): bool
{
    // Convert string to lowercase and remove spaces
    $str = str_replace(' ', '', strtolower($str));
    // Check string against that same string reversed
    return $str == strrev($str);
}

$check_string = 'Race Car';
if (is_palindrome($check_string)) {
    echo "<p>$check_string is a palindrome</p>";
} 