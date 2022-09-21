<?php

// Shorthand increment/decrement
$a = 10;
$a++; // $a = $a + 1;

$b = 5;
$b--; // $b = $b - 1;

/*
    Things to know
    - If you use this shorthand anywhere, including in echo
    statements, the variable will still change values
    - There are pre- and post-increment actions
*/

$n1 = 5;
// This will still be 5
echo 'The value of $n1 is ' . $n1++ . '. <br>';
// This will be 6
echo 'Now $n1 is ' . $n1 . '. <br>';

$n2 = 6;
// This will be 7
echo 'The value of $n2 is ' . ++$n2 . '. <br>';
// This will be 7
echo 'Now $n1 is ' . $n2 . '. <br>';
echo '<br>';

$n1 = 5;
// This will still be 5
echo 'The value of $n1 is ' . $n1-- . '. <br>';
// This will be 4
echo 'Now $n1 is ' . $n1 . '. <br>';

$n2 = 6;
// This will be 5
echo 'The value of $n2 is ' . --$n2 . '. <br>';
// This will be 5
echo 'Now $n1 is ' . $n2 . '. <br>';
echo '<br>';

$x = 'A';
echo '$x is ' . ++$x . '. <br>';
