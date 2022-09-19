<?php

/*
    Logical Operators
    Combine comparison statements and evaluate the 
    overall truthfulness
*/

/*
    && is AND
    - (true && true) is true, for example, 'The sky is blue AND the sun is yellow'
    - (true && false) is false, for example, 'The sky is blue AND the grass is pink'
    - (false && false) is false, for example, 'The sky is green AND the grass is pink'
*/

/*
    || is OR
    - (true || true) is true, for example, 'The sun is hot OR snow is cold'
    - (true || false) is true, for example, 'The sun is hot OR snow is made of candy'
    - (false || false) is false, for example, 'The sun is cold OR snow is made of candy'
*/

$a = 9 > 5;    // true
$b = 10 != 10; // false
$c = $a && $b; // false
$d = $a || $b; // true
$e = $b && $c; // false
$f = $a || $d; // true

$logic = [$a, $b, $c, $d, $e, $f];
var_dump($logic);

/*
    ^ is XOR
    - (true ^ true) is false
    - (true ^ false) is true
    - (false ^ false) is false
*/