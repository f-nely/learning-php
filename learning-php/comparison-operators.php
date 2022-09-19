<?php

/* 
    Comparison Operators
    Allow us to compare values and evaluate them as true or false
*/

// Compare equality with ==
var_dump(42 == 42); // is true
var_dump(2 == 7);   // is false
var_dump('1' == 1); // would evaluate as true

// Identical comparison with ===
var_dump(1 === 1); // is true
var_dump('1' === 1); // is false

// Greater than with >
var_dump(5 > 5); // is false
var_dump(10 > 5); // is true

// Less than with <
var_dump(5 < 5); // is false
var_dump(10 < 15); // is true

// Greater than or equal to with >=
var_dump(10 >= 10); // is true
var_dump(10 >= 5); // is true
var_dump(20 >= 10); // is false

// Less than or equal to with <=
var_dump(10 <= 10); // is true
var_dump(10 <= 5); // is false
var_dump(10 <= 20); // is true

/* 
    Not or negation with !
    != is 'not equal'
    !== is 'not identical'
*/
var_dump(7 != 7); // is false
var_dump(!(7 == 7)); // is also false, as it's saying 'the opposite of 7 == 7'

/*
    Used as boolean statements
    Will always evaluate to true or false
    used to check the state of a website and control the flow of the code
*/

/*
    From PHP Spec
    When comparing to a numeric string, use a number
    comparison (same as now). Otherwise, convert the
    number to string and use a string comparison.
*/
var_dump(0 == 'foo'); // false
