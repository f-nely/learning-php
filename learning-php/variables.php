<?php

    // Variables - a way to store information in order to reference it later

    // Defining a variable
    $age = 34;

    echo $age . '<br>'; // outputs 34

    $age = 35; // Happy birthday!

    $double_age = $age * 2;
    echo $double_age . '<br>'; // outputs 70

    define('VERSION', 1.1); // constants
    echo VERSION; 

    // VERSION = 1.2; Will not work
    // define('VERSION', 1.2); Also will not work

    // Variable types
    // integers: whole numbers (for example, 0, 1, 45, 128)
    // floats: numbers with decimal points (for example, 1.0, 3.16)
    // characters: single letters, numbers, or symbols
    // arrays
    // strings: collection of characters (for example, 'Hello', 'Racer 5')
    // booleans: true or false

    // Using quotes
    $name = "Joe";
    $first_letter = 'J';
