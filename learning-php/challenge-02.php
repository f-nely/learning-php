<?php

$min = 1; 
$max = 50;
$guess = 4; //Change this value to test!
// $num = 16; // Change this value to test!

// If you really want to go nuts, try this:
$num = rand($min, $max);

if ($guess < $min || $guess > $max) {
    echo '<h3>Your guess is out of range</h3>';
    exit;
} else {
    if ($num == $guess) {
        echo '<p>That\'s correct!</p>';
    } else if ($num > $guess) {
        echo '<p>Sorry - that guess is too low</p>';
    } else {
        echo '<p>Sorry - that guess is too high</p>';
    }
}

print_r($num);