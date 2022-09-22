<?php

/*
    What are functions?

    Functions
    - Reusable snippets of code that can 
    be called multiple times.

    Functions are like variables for lines of code.
*/

// Using functions
function hello_word(): void
{
    echo 'Hello World!';
}

hello_word();

function is_bigger(): bool
{
    return 10 >= 5;
}

echo '<br>';

$bigger = is_bigger();
if ($bigger) {
    echo 'The function returned true.';
} else {
    echo 'The function returned false.';
}

echo '<br>';

// Passing arguments
function is_bigger_than($a, $b): bool
{
    return $a >= $b;
}

var_dump(is_bigger_than(10, 5));