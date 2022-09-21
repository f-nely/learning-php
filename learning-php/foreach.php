<?php

/*
    foreach (array as item) {
        // do something with item
    }

    foreach (array as key => value) {
        // do something with key and value
    }
*/

$cars = ['Argo', 'Jetta', 'Cronos', 'Cruze', 'T-Cross', 'KWID'];
foreach ($cars as $car) {
    echo "<p>Name: $car</p>";
}

$home_towns = [
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Exton, PA',
    'Brian' => 'Grand Rapids, MI',
];

foreach ($home_towns as $name => $town) {
    echo "<p>$name lives in $town.</p>";
}