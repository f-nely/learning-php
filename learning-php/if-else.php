<?php

// Creating if/else statements

/*
    Control Structures
    Employ logic to code and execute statements based
    on specific conditions

    if statements are the most common control structures
*/

// $a = 14;
// $b = 14;
// if ($a > $b) {
//     echo "{$a} is greater than {$b}";
// } else if ($b > $a) {
//     echo "{$b} is greater than {$a}";
// } else {
//     echo "{$a} and {$b} apper to be equal";
// }

if (10 < 1) {
    echo '<p>We stopped at if</p>';
} else if (10 < 4) {
    echo '<p>We stopped at the first else if</p>';
} else if (10 < 11) {
    echo '<p>We stopped at the second else if</p>';
} else if (10 < 20) {
    echo '<p>We stopped at the 3rd else if</p>';
} else {
    echo '<p>None of the conditions are true, we never stopped, so this is the else</p>';
}

$is_logged_in = true;

if ($is_logged_in) {
    echo '<h3>Welcome back, user!</h3>';
} else {
    echo '<h3>Welcome to the site!</h3>';
}