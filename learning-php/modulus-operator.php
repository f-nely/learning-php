<?php

/*
    Modulus Operator
        
    Modulus (%)
    Finds the remainder of division
*/

$a = 2;
$b = 3;

echo $b % $a; // Will print out 1
echo '<br>';

$num = 5;
if ($num % 2 == 0) {
    echo "<p>$num is even</p>";
} else {
    echo "<p>$num is odd</p>";
}

$n1 = 15;
$n2 = 5;

echo ($n1 % $n2 == 0) ? "<p>$n1 is a factor of $n2</p>" : "$n1 is not a factor of $n";