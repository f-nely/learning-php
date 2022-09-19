<?php

$x = 0;

// function add_to($x)
// {
//     return $x + 5;
// }

// $result = match ($x) {
//     -2, -1, 0 => add_to($x),
//     1 => '$x is 1',
//     2 => '$x is 2',
//     default => '$x is neither 1 nor 2',
// };

$result = match(true) {
    $x <= 0 => '$x is not positive',
    $x == 1 => '$x is 1',
    $x == 2 => '$x is 2',
    default => '$x is neither 1 nor 2'
};

echo $result;

$turtle = 'Leo';
$bandana = match($turtle) {
    'Leo' => 'blue',
    'Raph' => 'red',
    'Mikey' => 'orange',
    'Don' => 'purple',
    default => 'green',
};

echo "<p>$bandana</p>";